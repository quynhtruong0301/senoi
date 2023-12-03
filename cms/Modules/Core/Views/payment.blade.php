@extends('Core::app')
@section('page', 'Nạp Coin')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/web/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Nạp Coin</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="assets/web/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="assets/web/images/thanh-toan.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h1-pricing-plan-area two pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="section-title1 text-center">
                        <span><img src="assets/images/icon/section-vec-l1.svg" alt="">Nạp thêm Coin nào !!!<img
                                src="assets/images/icon/section-vec-r1.svg" alt=""></span>
                        <h2>Đang có các gói này nè</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link one active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Chơi nhỏ
                        </button>
                        <button class="nav-link two" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Chơi lớn
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row justify-content-center g-lg-4 gy-5">
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="assets/images/icon/price-card-bg.svg" alt="">
                                    <div class="title">
                                        <h4>Khởi động</h4>
                                        <h2><span class="currency">$</span>20.000<span class="time">vnđ</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Bạn có thêm 20 coin vào tài khoản
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tặng thêm 5 coin cho lần nạp tiếp theo
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tích luỹ để lên hạng thành viên
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <form method="post" action="{{ route('client.payment.checkout') }}">
                                            @csrf
                                            <button type="submit" name="redirect">Nạp luôn</button>
                                            <input style="display: none" name="plan" value="1"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="assets/images/icon/price-card-bg.svg" alt="">
                                    <div class="title">
                                        <h4>Luyện tập</h4>
                                        <h2><span class="currency">$</span>100.000<span class="time">vnđ</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Bạn có thêm 120 coin vào tài khoản
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tặng thêm 5 coin cho lần nạp tiếp theo
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tích luỹ để lên hạng thành viên
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <form method="post" action="{{ route('client.payment.checkout') }}">
                                            @csrf
                                            <button type="submit" name="redirect">Nạp luôn</button>
                                            <input style="display: none" name="plan" value="2"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="assets/images/icon/price-card-bg.svg" alt="">
                                    <div class="title">
                                        <h4>Thử sức</h4>
                                        <h2><span class="currency">$</span>200.000<span class="time">vnđ</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Bạn có thêm 250 coin vào tài khoản
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tặng thêm 5 coin cho lần nạp tiếp theo
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tích luỹ để lên hạng thành viên
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <form method="post" action="{{ route('client.payment.checkout') }}">
                                            @csrf
                                            <button type="submit" name="redirect">Nạp luôn</button>
                                            <input style="display: none" name="plan" value="3"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row justify-content-center g-lg-4 gy-5">
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="assets/images/icon/price-card-bg.svg" alt="">
                                    <div class="title">
                                        <h4>Dân chơi</h4>
                                        <h2><span class="currency">$</span>500.000<span class="time">vnđ</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Bạn có thêm 600 coin vào tài khoản
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tặng thêm 5 coin cho lần nạp tiếp theo
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tích luỹ để lên hạng thành viên
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <form method="post" action="{{ route('client.payment.checkout') }}">
                                            @csrf
                                            <button type="submit" name="redirect">Nạp luôn</button>
                                            <input style="display: none" name="plan" value="4"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="assets/images/icon/price-card-bg.svg" alt="">
                                    <div class="title">
                                        <h4>Triệu phú</h4>
                                        <h2><span class="currency">$</span>1.000.000<span class="time">vnđ</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Bạn có thêm 1200 coin vào tài khoản
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tặng thêm 5 coin cho lần nạp tiếp theo
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tích luỹ để lên hạng thành viên
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <form method="post" action="{{ route('client.payment.checkout') }}">
                                            @csrf
                                            <button type="submit" name="redirect">Nạp luôn</button>
                                            <input style="display: none" name="plan" value="5"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-10">
                                <div class="pricing-card">
                                    <img class="price-card-vector" src="assets/images/icon/price-card-bg.svg" alt="">
                                    <div class="title">
                                        <h4>Tỷ phú</h4>
                                        <h2><span class="currency">$</span>2.000.000<span class="time">vnđ</span></h2>
                                    </div>
                                    <ul>
                                        <li>
                                            Bạn có thêm 2500 coin vào tài khoản
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tặng thêm 5 coin cho lần nạp tiếp theo
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                        <li>
                                            Tích luỹ để lên hạng thành viên
                                            <img src="assets/images/icon/pricing-check.svg" alt="">
                                        </li>
                                    </ul>
                                    <div class="book-now-btn">
                                        <form method="post" action="{{ route('client.payment.checkout') }}">
                                            @csrf
                                            <button type="submit" name="redirect">Nạp luôn</button>
                                            <input style="display: none" name="plan" value="6"/>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
