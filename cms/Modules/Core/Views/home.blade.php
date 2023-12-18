@extends('Core::app')
@section('page', 'Trang chủ')
@section('main')
    <div class="hero3 mb-90">
        <div class="background-text">
            <h2 class="marquee_text">
                <img src="{{ cxl_asset('assets/web/images/icon/marque-foot.svg') }}" alt="image"/>
                <span>Yêu Thương, Chăm Sóc, Bảo Vệ</span>
                <img src="{{ cxl_asset('assets/web/images/icon/marque-foot.svg') }}" alt="image"/>
                <img src="{{ cxl_asset('assets/web/images/icon/marque-foot.svg') }}" alt="image"/>
                Cùng Nhau Làm Cho Thế Giới Này Trở Nên Ấm Áp Hơn!
                <img src="{{ cxl_asset('assets/web/images/icon/marque-foot.svg') }}" alt="image"/>
            </h2>
        </div>
        <div class="swiper hero3-slider">
            <div class="swiper-wrapper">
                @foreach($banners as $item)
                <div class="swiper-slide">
                    <div class="hero-wrapper">
                        <img class="img-fluid w-100" src="{{ cxl_asset($item->url) }}"/>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="right-sidebar">
            <div class="slider-pagination-area">
                <div class="h3-hero-slider-pagination"></div>
            </div>
        </div>
    </div>
    <div class="home3-categoty-area pt-120 mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2>
                            <img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-left.svg') }}"
                                 alt=""><span>Danh mục thú cưng</span>
                            <img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-right.svg') }}" alt=""></h2>
                    </div>
                    <div class="slider-btn-wrap">
                        <div class="slider-btn prev-btn-11">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-11">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="swiper h3-category-slider">
                        <div class="swiper-wrapper">
                            @foreach($categories as $item)
                            <div class="swiper-slide">
                                <div class="category-card">
                                    <a href="#" class="category-card-inner">

                                        <div class="category-card-front">
                                            <div class="category-icon">
                                                <img src="{{ cxl_asset($item->virtual_image) }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4>{{ $item->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="category-card-back">
                                            <img style="height: 126px; width: 126px" src="{{ cxl_asset($item->real_image) }}" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="home3-collection-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2><img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-left.svg') }}"
                                 alt=""><span>Thú cưng mới</span><img
                                src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-right.svg') }}" alt=""></h2>
                    </div>
                    <div class="h3-view-btn d-md-flex d-none">
                        <a href="{{ route('client.pet') }}">
                            Xem thêm<img src="{{ cxl_asset('assets/web/images/icon/haf-button-2.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($newPet as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="collection-card">
                        <div class="collection-img">
                            <img class="img-fluid" src="{{ cxl_asset($item->thumbnail) }}" alt="">
                        </div>
                        <div class="collection-content p-1">
                            <h4 class="text-center">
                                <a href="{{ route('client.detail-pet', ['id' => $item->id]) }}">{{ $item->name }}</a>
                            </h4>
                            <div class="price">
                                <h6>{{ number_format($item->price) }}₫</h6>
                            </div>
                            <div class="information text-left">
                                <ul class="mb-0">
                                    <li>
                                        <span style="font-weight: 600">Địa chỉ: </span>{{ $item->ward->name . ', ' . $item->district->name . ', ' . $item->province->name }}
                                    </li>
                                    <li>
                                        <span style="font-weight: 600">Yêu thích: </span>{{ $item->favorite }}
                                    </li>
                                    @if(auth()->check())
                                        <li>
                                            <span style="font-weight: 600">Liên hệ: </span>{{ $item->user->phone }}
                                        </li>
                                    @else
                                        <li>
                                            <span style="font-weight: 600">Liên hệ: </span>*********
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row d-md-none d-block pt-30">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="h3-view-btn">
                        <a href="{{ route('client.pet') }}">Xem tất cả<img src="{{ cxl_asset('assets/web/images/icon/haf-button-2.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home3-collection-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2><img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-left.svg') }}"
                                 alt=""><span>Thú cưng nổi bật</span><img
                                src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-right.svg') }}" alt=""></h2>
                    </div>
                    <div class="h3-view-btn d-md-flex d-none">
                        <a href="{{ route('client.pet') }}">
                            Xem thêm<img src="{{ cxl_asset('assets/web/images/icon/haf-button-2.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($featurePet as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="collection-card">
                            <div class="collection-img">
                                <img class="img-fluid" src="{{ cxl_asset('$item->thumbnail') }}" alt="">
                            </div>
                            <div class="collection-content p-1">
                                <h4 class="text-center">
                                    <a href="{{ route('client.detail-pet', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                </h4>
                                <div class="price">
                                    <h6>{{ number_format($item->price) }}₫</h6>
                                </div>
                                <div class="information text-left">
                                    <ul class="mb-0">
                                        <li>
                                            <span style="font-weight: 600">Địa chỉ: </span>{{ $item->ward->name . ', ' . $item->district->name . ', ' . $item->province->name }}
                                        </li>
                                        <li>
                                            <span style="font-weight: 600">Yêu thích: </span>{{ $item->favorite }}
                                        </li>
                                        @if(auth()->check())
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>{{ $item->user->phone }}
                                            </li>
                                        @else
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>*********
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row d-md-none d-block pt-30">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="h3-view-btn">
                        <a href="{{ route('client.pet') }}">Xem tất cả<img src="{{ cxl_asset('assets/web/images/icon/haf-button-2.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home3-testimonial-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2>
                            <img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-left.svg') }}" alt="">
                            <span>Cảm nhận của người dùng</span>
                            <img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-right.svg') }}" alt=""></h2>
                    </div>
                    <div class="slider-btn-wrap">
                        <div class="slider-btn prev-btn-12">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="slider-btn next-btn-12">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-11">
                    <div class="swiper h3-testimonil-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper">
                                    <p>
                                        Mình đã loay hoay rất lâu và mất rất nhiều thời gian để tìm cho gia đình một chú cún và tính cờ tìm được website, thực sự trang này đã giúp mình tiết kiệm rất nhiều thời gian và công sức để tìm. Mình cảm ơn nhiều!
                                    </p>
                                    <div class="author-area">
                                        <div class="author-img">
                                            <img style="height: 80px; width: 80px" src="{{ cxl_asset('assets/web/images/customer.jpeg') }}" alt="">
                                        </div>
                                        <div class="author-name-deg">
                                            <h3>Minh Công</h3>
                                            <span>Khách hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper">
                                    <p>
                                        Mình đã loay hoay rất lâu và mất rất nhiều thời gian để tìm cho gia đình một chú cún và tính cờ tìm được website, thực sự trang này đã giúp mình tiết kiệm rất nhiều thời gian và công sức để tìm. Mình cảm ơn nhiều!
                                    </p>
                                    <div class="author-area">
                                        <div class="author-img">
                                            <img style="height: 80px; width: 80px" src="{{ cxl_asset('assets/web/images/customer.jpeg') }}" alt="">
                                        </div>
                                        <div class="author-name-deg">
                                            <h3>Phòng khám Happy</h3>
                                            <span>Phòng khám</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-wrapper">
                                    <p>
                                        Mình đã loay hoay rất lâu và mất rất nhiều thời gian để tìm cho gia đình một chú cún và tính cờ tìm được website, thực sự trang này đã giúp mình tiết kiệm rất nhiều thời gian và công sức để tìm. Mình cảm ơn nhiều!
                                    </p>
                                    <div class="author-area">
                                        <div class="author-img">
                                            <img style="height: 80px; width: 80px" src="{{ cxl_asset('assets/web/images/customer.jpeg') }}" alt="">
                                        </div>
                                        <div class="author-name-deg">
                                            <h3>Quỳnh Trương</h3>
                                            <span>Khách hàng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home3-blog-area mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 d-flex align-items-center justify-content-between flex-wrap gap-3">
                    <div class="section-title3">
                        <h2>
                            <img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-left.svg') }}" alt="">
                            <span>Bài viết nổi bật</span>
                            <img src="{{ cxl_asset('assets/web/images/icon/h3-sec-tt-vect-right.svg') }}" alt="">
                        </h2>
                    </div>
                    <div class="h3-view-btn d-md-flex d-none">
                        <a href="#">Xem thêm<img src="{{ cxl_asset('assets/web/images/icon/haf-button-2.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-card3">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{ cxl_asset($item->image) }}" alt="">
                        </div>
                        <div class="bolg-content">
                            <div class="cetagoty">
                                <a href="{{ route('client.blog', ['topic' => $item->topic->id]) }}">{{ $item->topic->name }}</a>
                            </div>
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#">{{ $item->author }}</a></li>
                                    <li><a href="#">{{ $item->created_at }}</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="{{ route('client.blog-detail', ['id' => $item->id]) }}">{{ $item->title }}</a>
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row d-md-none d-block pt-30">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="h3-view-btn">
                        <a href="shop.html">View All Product
                            <img src="{{ cxl_asset('assets/web/images/icon/haf-button-2.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ cxl_asset('assets/web/js/isotope.pkgd.min.js') }}"></script>
@endpush

