@extends('Core::app')
@section('page', 'Bài viết')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-btm-vec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Bài viết</h1>
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
    <div class="blog-grid-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center mb-70">
                <div class="col-lg-8">
                    @foreach($blogs as $item)
                        <div class="blog-st-card mb-60">
                            <div class="blog-img">
                                <img class="img-fluid" src="{{ cxl_asset($item->image) }}" alt="">
                                <div class="category">
                                    <a href="{{ route('client.blog',['topic' => $item->topic->id]) }}">{{ $item->topic->name }}</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#">{{ $item->created_at }}</a></li>
                                        <li><a href="#">By, {{ $item->author }}</a></li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="{{ route('client.blog-detail', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                </h4>
                                <p>{{ $item->description }}</p>
                                <div class="more-btn">
                                    <a href="{{ route('client.blog-detail', ['id' => $item->id]) }}"><span></span>Đọc
                                        thêm</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="paginations-area d-flex justify-content-center">
                        {{ $blogs->withQueryString()->links('Core::pagination.custom') }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="single-widgets widget_egns_categoris mb-30">
                            <div class="widget-title">
                                <h3>Chủ đề</h3>
                            </div>
                            <ul class="wp-block-categoris-cloud">
                                @foreach($topics as $item)
                                    <li>
                                        <a href="{{ route('client.blog',['topic' => $item->id]) }}"><span>{{ $item->name }}</span>
                                            <span><span class="number-of-categoris"></span><i
                                                    class="bi bi-arrow-right-short"></i></span></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="single-widgets widget_egns_recent_post mb-30">
                            <div class="widget-title">
                                <h3>Bài viết mới</h3>
                            </div>
                            <div class="recent-post-wraper">
                                @foreach($newBlogs as $item)
                                    <div class="widget-cnt mb-25">
                                        <div class="wi">
                                            <a href="{{ route('client.blog-detail', ['id' => $item->id]) }}">
                                                <img class="img-fluid" style="max-width: 100px"
                                                     src="{{ cxl_asset($item->image) }}" alt="image">
                                            </a>
                                        </div>
                                        <div class="wc">
                                            <a href="#">{{ $item->created_at }}</a>
                                            <h6>
                                                <a href="{{ route('client.blog-detail', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="single-widgets widget_egns_social">
                            <div class="widget-title">
                                <h3>Social</h3>
                            </div>
                            <ul class="social-link d-flex align-items-center">
                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-tiktok"></i></a></li>
                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

