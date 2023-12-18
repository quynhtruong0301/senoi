@extends('Core::app')
@section('page', 'Thú cưng')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-btm-vec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Chi tiết thú cưng</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-vec.png') }}" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="{{ cxl_asset('assets/web/images/thu-cung.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-details-page pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 mb-120">
                <div class="col-lg-7">
                    <div class="tab-content tab-content1" id="v-pills-tabContent">
                        @foreach($pet->image as $key => $image)
                            <div class="tab-pane fade {{ $key == 0 ? "active show" : "" }}" id="v-pills-img{{$key}}"
                                 role="tabpanel" aria-labelledby="v-pills-img{{$key}}-tab">
                                <img class="img-fluid" src="{{ cxl_asset($image->url) }}" alt="senoi">
                            </div>
                        @endforeach
                    </div>

                    <div class="nav nav1 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach($pet->image as $key => $image)
                            <button class="nav-link {{ $key == 0 ? "active" : "" }}" id="v-pills-img{{ $key }}-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-img{{ $key }}" type="button"
                                    role="tab" aria-controls="v-pills-img{{ $key }}"
                                    aria-selected="{{ $key == 0 ? "true" : "false" }}">
                                <img class="img-fluid" style="max-width: 100px" src="{{ cxl_asset($image->url) }}" alt="senoi">
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-details-content">
                        <h3>{{ $pet->name }}</h3>
                        <div class="price-tag">
                            <h4>{{ number_format($pet->price) }}₫</h4>
                        </div>
                        <div class="phone-category">
                            <label style="font-weight: bold">Danh mục: </label>
                            <span>{{ $pet->category->name }}</span>
                        </div>
                        <br>
                        <div class="phone-category">
                            <label style="font-weight: bold">Đặc điểm: </label>
                            @foreach($pet->attribute as $item)
                                <p>+ {{ $item->type . ' ' . $item->display_name }}</p>
                            @endforeach
                        </div>
                        <br>
                        <div class="phone-color">
                            <label style="font-weight: bold">Loại bài đăng: </label>
                            <span>{{ $pet->free == 1 ? 'Cho nhận' : 'Đăng bán' }}</span>
                        </div>
                        <br>
                        <div class="phone-status">
                            <label style="font-weight: bold">Tình trạng: </label>
                            <span>{{ $pet->sold == 1 ? 'Đã bán' : 'Vẫn còn' }}</span>
                        </div>
                        <br>
                        <div class="phone-status">
                            <label style="font-weight: bold">Ngày đăng: </label>
                            <span>{{ $pet->created_at }}</span>
                        </div>
                        <br>
                        <div class="phone-status">
                            <label style="font-weight: bold">Mô tả: </label>
                            <span>{{ $pet->description }}</span>
                        </div>
                        <br>
                        <div class="phone-category">
                            <label style="font-weight: bold">Người bán: </label>
                            <span>{{ $pet->user->name }}</span>
                        </div>
                        <br>
                        <div class="phone-category">
                            <label style="font-weight: bold">Email: </label>
                            <span>{{ $pet->user->email }}</span>
                        </div>
                        <br>
                        <div class="phone-category">
                            <label style="font-weight: bold">Điện thoại: </label>
                            <span>{{ $pet->user->phone }}</span>
                        </div>
                        <br>
                        <div class="phone-category">
                            <label style="font-weight: bold">Người bán: </label>
                            <span>{{ $pet->user->name }}</span>
                        </div>
                        <br>
                        <div class="phone-color">
                            <label style="font-weight: bold">Địa chỉ: </label>
                            <span>{{ $pet->ward->name . ', ' . $pet->district->name . ', ' . $pet->province->name }}</span>
                        </div>
                        <br>
                        <br>
                        <div class="buy-now-btn">
                            <a href="#">Liên hệ ngay: {{ $pet->user->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

