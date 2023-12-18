@extends('Core::app')
@section('page', 'Đăng nhập')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-btm-vec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Đăng nhập</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-vec.png') }}" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="{{ cxl_asset('assets/web/images/bai-viet.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-section pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center g-4">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="form-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="form-title">
                            <h3>Đăng nhập</h3>
                            <p>Bạn là thành viên mới ? <a href="{{ route('client.register') }}">Đăng ký</a></p>
                        </div>
                        <form class="w-100" method="post" action="{{ route('client.post-login') }}">
                            @csrf
                            <div class="row">
                                @if(session()->has('success'))
                                <div class="text-success">{{ session()->get('success') }}, vui lòng đăng nhập để tiếp tục!</div>
                                @endif
                                @error('login-error')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12">
                                    <div class="form-inner">
                                        <label>Nhập Email/SĐT</label>
                                        <input type="email" name="email" placeholder="Nhập email hoặc số điện thoại">
                                    </div>
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-inner">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu"/>
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="html">
                                            <label for="html">Ghi nhớ đăng nhập</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="account-btn">Đăng nhập</button>
                        </form>
                        <div class="alternate-signup-box">
                            <h6>Đăng nhập bằng mạng xã hội</h6>
                            <div class="btn-group gap-4">
                                <a href="{{ route('client.login-social', ['social' => 'google']) }}" class="eg-btn google-btn d-flex align-items-center">
                                    <i class='bx bxl-google'></i><span>Đăng nhập Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
