@extends('Core::app')
@section('page', 'Thành công')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-btm-vec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Thanh toán thành công</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-vec.png') }}" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="{{ cxl_asset('assets/web/images/thanh-toan.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h1-pricing-plan-area two pt-120 mb-120">
        <div class="container">
            <h1 class="text-success">Bạn đã thành toán thành công!!!</h1>
        </div>
    </div>
@endsection
