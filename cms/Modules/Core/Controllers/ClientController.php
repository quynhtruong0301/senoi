<?php

namespace Cms\Modules\Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Cms\Modules\Core\Models\Banner;
use Cms\Modules\Core\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct
    (

    )
    {

    }

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
        return view('Core::home', compact('banners', 'categories'));
    }

    public function about()
    {
        return view('Core::about');
    }

    public function contact()
    {
        return view('Core::contact');
    }

    public function blog()
    {
        return view('Core::blog');
    }

    public function blogDetail()
    {
        return view('Core::blogDetail');
    }

    public function payment()
    {
        return view('Core::payment');
    }

    public function pet()
    {
        return view('Core::pet');
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
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('client.payment.success');
        $vnp_TmnCode = "985YLA98";
        $vnp_HashSecret = "KPBTCNQXEBVMMVFLWCBDOXXIQCBAVMLY";

        $vnp_TxnRef = auth()->id().Carbon::now()->timestamp;
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

    public function success()
    {
        return view('Core::success');
    }
}
