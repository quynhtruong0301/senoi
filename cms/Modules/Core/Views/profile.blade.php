@extends('Core::app')
@section('page', 'Profile')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-btm-vec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Thông tin cá nhân</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-vec.png') }}" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="{{ cxl_asset('assets/web/images/ve-chung-toi.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-pages pt-120 mb-120">
        <div class="container">
            <div class="row align-items-center g-lg-4 gy-5">
                <div class="col-lg-5">
                    <div class="contact-left" style="margin-top: -70px">
                        <div class="hotline mb-80">
                            <h3>Ảnh đại diện</h3>
                            <div class="icon">
                                <img style="height: 100px; width: 100px; border-radius: 50%" src="{{ $user->avatar }}" alt="">
                            </div>
                            <div class="info">
                                <h6><a href="#">Số coin: {{ $user->coin }}</a></h6>
                                <h6><a href="#">Số bài đăng: {{ count($user->pet) }}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2>Thông tin cá nhân</h2>
                        @if(count($errors) > 0)
                        <span class="text-danger">{{ $errors->first() }}</span>
                        @endif
                        <form method="post" action="{{ route('client.profile-update') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <input type="text" name="name" value="{{ $user->name }}" placeholder="Họ và tên">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-40">
                                    <div class="form-inner">
                                        <input type="text" style="background: #fffbdb" readonly disabled name="email" value="{{ $user->email }}" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-40">
                                    <div class="form-inner">
                                        <input type="text" name="phone" value="{{ $user->phone }}" placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <input type="password" name="password" value="" placeholder="Mật khẩu">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <input type="password" name="password_confirmation" value="" placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button type="submit" class="primary-btn1">Cập nhật<i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

