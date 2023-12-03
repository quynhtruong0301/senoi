<?php

namespace Cms\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Admin\Requests\LoginRequest;
use Cms\Modules\Admin\Services\Contracts\AdminUserServiceContract;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(AdminUserServiceContract $userService)
    {
        $this->userService = $userService;
    }

    public function login(Request $request)
    {
        if (auth()->check() && auth()->user()->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        }

        return view('Admin::auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = $this->userService->findByEmail($credentials['email']);

        if (!$user || !$user->hasRole('admin') || !auth()->attempt($credentials)) {
            return redirect()->back()->withErrors(['login-error' => 'Thông tin đăng nhập không chính xác!'])->withInput();
        }

        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
