<?php

namespace Cms\Modules\Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Cms\Modules\Core\Models\Attribute;
use Cms\Modules\Core\Models\Banner;
use Cms\Modules\Core\Models\Blog;
use Cms\Modules\Core\Models\Category;
use Cms\Modules\Core\Models\Comment;
use Cms\Modules\Core\Models\Contact;
use Cms\Modules\Core\Models\District;
use Cms\Modules\Core\Models\Payment;
use Cms\Modules\Core\Models\Pet;
use Cms\Modules\Core\Models\Province;
use Cms\Modules\Core\Models\Topic;
use Cms\Modules\Core\Models\Transaction;
use Cms\Modules\Core\Models\User;
use Cms\Modules\Core\Models\Ward;
use Cms\Modules\Core\Requests\PetRequest;
use Cms\Modules\Core\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $banners = Banner::where('public', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->orderBy('id', 'desc')
            ->get();
        $categories = Category::where('public', 1)
            ->orderBy('id', 'desc')
            ->get();
        $blogs = Blog::take(3)->get();
        $newPet = Pet::orderBy('created_at', 'desc')->take(6)->get();
        $featurePet = Pet::orderBy('favorite', 'desc')->take(6)->get();

        return view('Core::home', compact('banners', 'categories', 'blogs', 'newPet', 'featurePet'));
    }

    public function about()
    {
        return view('Core::about');
    }

    public function contact()
    {
        return view('Core::contact');
    }

    public function blog(Request $request)
    {
        if ($request->topic) {
            $blogs = Blog::where('topic_id', $request->topic)->paginate(3);
        } else {
            $blogs = Blog::paginate(3);
        }
        $topics = Topic::all();
        $newBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        return view('Core::blog', compact('blogs', 'topics', 'newBlogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::with('comment.user', 'topic')->find($id);
        $topics = Topic::all();
        $newBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        return view('Core::blogDetail', compact('blog', 'topics', 'newBlogs'));
    }

    public function payment()
    {
        return view('Core::payment');
    }

    public function pet(Request $request)
    {
        $categories = Category::all();
        $min_price = $request->min_price ?? 0;
        $max_price = $request->max_price ?? 1000000000;

        $result = Pet::where('sold', 0);

        if ($min_price || $max_price) {
            $result = $result->whereBetween('price', [$min_price, $max_price]);
        }

        if ($request->category) {
            $result = $result->whereIn('category_id', $request->category);
        }

        if ($request->type) {
            $result = $result->whereIn('free', $request->type);
        }

        $pets = $result->orderBy('created_at', 'desc')->paginate(20);

        return view('Core::pet', compact('pets', 'categories'));
    }

    public function checkout(Request $request)
    {
        $amountTotal = 0;
        switch ($request->plan) {
            case 1:
                $amountTotal = 20000;
                break;
            case 2:
                $amountTotal = 100000;
                break;
            case 3:
                $amountTotal = 200000;
                break;
            case 4:
                $amountTotal = 500000;
                break;
            case 5:
                $amountTotal = 1000000;
                break;
            case 6:
                $amountTotal = 2000000;
                break;
        }

        $key = auth()->id().Carbon::now()->timestamp;

        Transaction::create([
            'user_id' => auth()->id(),
            'amount_total' => $amountTotal,
            'merchant_key' => $key,
            'payment_key' => $key,
            'capture_method' => 1,
            'payment_gateway' => 'vnpay',
            'status' => 'pending'
        ]);

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('client.payment.success', ['key' => $key, 'amount_total' => $amountTotal]);
        $vnp_TmnCode = "985YLA98";
        $vnp_HashSecret = "KPBTCNQXEBVMMVFLWCBDOXXIQCBAVMLY";

        $vnp_TxnRef = $key;
        $vnp_OrderInfo = 'USER: ' . auth()->id() . ' THANH TOAN GOI ' . $request->plan;
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $amountTotal * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    public function success(Request $request)
    {
        $key = $request->key;
        $amountTotal = $request->amount_total;

        Transaction::where('payment_key', $key)->update(['status' => 'paid']);

        Payment::create([
            'user_id' => auth()->id(),
            'amount_total' => $amountTotal,
            'merchant_key' => $key,
            'payment_key' => $key,
            'capture_method' => 1,
            'payment_gateway' => 'vnpay',
            'status' => 'paid'
        ]);

        $newCoin = auth()->user()->coin + $amountTotal/1000;

        User::where('id', \auth()->id())->update(['coin' => $newCoin]);

        return view('Core::success');
    }

    public function storeComment(Request $request)
    {
        $data['content'] = $request->input('content');
        $data['user_id'] = auth()->id();
        if ($request->blog_id) {
            $data['blog_id'] = $request->input('blog_id');
        }
        if ($request->pet_id) {
            $data['blog_id'] = $request->input('blog_id');
        }

        Comment::create($data);

        return redirect()->back();
    }

    public function storeContact(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;

        Contact::create($data);

        return redirect()->back();
    }

    public function profile()
    {
        $user = User::find(auth()->id());

        return view('Core::profile', compact('user'));
    }

    public function updateProfile(ProfileRequest $request)
    {
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        User::find(auth()->id())->update($data);

        return redirect()->back();
    }

    public function createPet()
    {
        $attributes = Attribute::all();
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();
        $categories = Category::all();
        return view('Core::create_pet', compact('attributes', 'provinces', 'districts', 'wards', 'categories'));
    }

    public function storePet(PetRequest $request)
    {
        $data['user_id'] = auth()->id();
        $data['category_id'] = $request->category_id;
        $data['province_id'] = $request->province_id;
        $data['district_id'] = $request->district_id;
        $data['ward_id'] = $request->ward_id;
        $data['name'] = $request->name;
        $data['free'] = $request->free;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $images = [];
        if ($request->images){
            foreach ($request->images as $key => $file) {
                $imageName = 'pet'.Carbon::now()->format('Y-m-d-H-i-s').rand(1, 1000).'.'.$file->getClientOriginalName();
                Storage::disk('public')->putFileAs('pet', $file, $imageName,'public');
                if ($key == 0) {
                    $data['thumbnail'] = '/pet/'.$imageName;
                    $pet = Pet::create($data);
                    $pet->attribute()->attach($request->input('attributes'));
                }
                $url = [
                    'pet_id' => $pet->id,
                    'url' => '/pet/'.$imageName
                ];

                array_push($images, $url);
            }
        }

        $pet->image()->createMany($images);
        auth()->user()->update(['coin' => auth()->user()->coin - 5]);
    }

    public function myPet()
    {
        $pets = Pet::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(20);

        return view('Core::my_pet', compact('pets'));
    }

    public function detailPet($id)
    {
        $pet = Pet::find($id);

        return view('Core::pet_detail', compact('pet'));
    }
}
