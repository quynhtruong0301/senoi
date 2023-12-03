<?php

namespace Cms\Modules\Core\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Core\Requests\LoginRequest;
use Cms\Modules\Core\Requests\RegisterRequest;
use Cms\Modules\Core\Services\Contracts\CoreUserServiceContract;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    protected $userService;

    public function __construct
    (
        CoreUserServiceContract $userService
    )
    {
        $this->userService = $userService;
    }

    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('client.home');
        }

        return view('Core::login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!auth()->attempt($credentials)) {
            return redirect()->back()->withErrors(['login-error' => 'Thông tin đăng nhập không chính xác!'])->withInput();
        }

        return redirect()->route('client.home');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('client.home');
    }

    public function register()
    {
        return view('Core::register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = bcrypt($request->password);
        $data['avatar'] = '/assets/web/images/avatar-default.jpeg';
        $this->userService->store($data);

        return redirect()->route('client.login')->with('success', 'Đăng ký tài khoản thành công!');

    }

    public function socialRedirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function socialCallback($social, Request $request)
    {
        $data = $this->userService->handleCallback($request, $social);
        auth()->login($data);

        return redirect()->route('client.home');
    }

}
