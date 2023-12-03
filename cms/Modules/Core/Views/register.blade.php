@extends('Core::app')
@section('page', 'Đăng ký')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Đăng ký</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="assets/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="img-fluid" src="assets/images/bg/inner-banner-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-section pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Đăng ký</h3>
                            <p>Bạn đã có tài khoản? <a href="login.html">Đăng nhập</a></p>
                        </div>
                        <form class="w-100" method="post" action="{{ route('client.post-register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Họ và tên</label>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nhập họ tên">
                                    </div>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Nhập email">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu"/>
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label>Xác nhận mật khẩu</label>
                                        <input type="password" name="password_confirmation" id="password2" placeholder="Nhập lại mật khẩu"/>
                                        <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                    </div>
                                </div>
                            </div>
                            <button class="account-btn">Đăng ký</button>
                        </form>
                        <div class="alternate-signup-box">
                            <h6>Đăng ký bằng Google</h6>
                            <div class="btn-group gap-4">
                                <a href="{{ route('client.login-social', ['social' => 'google']) }}" class="eg-btn google-btn d-flex align-items-center"><i class='bx bxl-google'></i><span>Đăng ký với Google</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
