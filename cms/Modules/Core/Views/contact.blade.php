@extends('Core::app')
@section('page', 'Liên hệ')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/web/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Liên hệ</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="assets/web/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="assets/web/images/lien-he.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-pages pt-120 mb-120">
        <div class="container">
            <div class="row align-items-center g-lg-4 gy-5">
                <div class="col-lg-5">
                    <div class="contact-left">
                        <div class="hotline mb-80">
                            <h3>Liên hệ</h3>
                            <div class="icon">
                                <img src="assets/web/images/icon/phone-icon4.svg" alt="">
                            </div>
                            <div class="info">
                                <h6><a href="#">033.205.6287</a></h6>
                                <h6><a href="#">035.362.1900</a></h6>
                            </div>
                        </div>
                        <div class="location">
                            <h3>Địa chỉ</h3>
                            <div class="icon">
                                <img src="assets/web/images/icon/location4.svg" alt="">
                            </div>
                            <div class="info">
                                <h6><a href="#">Tây Mỗ, Nam Từ Liêm, Hà Nội</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2>Liên hệ:</h2>
                        <form>
                            <div class="row">
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <input value="{{ auth()->check() ? auth()->user()->name : '' }}" type="text" placeholder="Nhập tên của bạn">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-40">
                                    <div class="form-inner">
                                        <input value="{{ auth()->check() ? auth()->user()->email : '' }}" type="text" placeholder="Email của bạn">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-40">
                                    <div class="form-inner">
                                        <input value="{{ auth()->check() ? auth()->user()->phone : '' }}" type="text" placeholder="Số điện thoại của bạn">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <textarea placeholder="Những điều bạn muốn nói..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primary-btn1">Gửi đi<i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="location-map">
        <div class="vector">
            <img src="assets/web/images/bg/map-vector.png" alt="">
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.813938858118!2d105.8399242760152!3d21.00009418064215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac71752d8f79%3A0xd2ec575c01017afa!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBLaW5oIFThur8gUXXhu5FjIETDom4gKE5FVSk!5e0!3m2!1svi!2s!4v1699214915720!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

