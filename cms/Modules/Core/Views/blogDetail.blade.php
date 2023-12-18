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
                        <h1>Bài viết chi tiết</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-vec.png') }}"
                                 alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px"
                             src="{{ cxl_asset('assets/web/images/bai-viet.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center mb-70">
                <div class="col-lg-8">
                    <div class="blog-details-wrap mb-120">
                        <div class="post-thum">
                            <img class="img-fluid" src="{{ cxl_asset($blog->image) }}" alt="blog-dt-img">
                            <div class="category">
                                <a href="{{ route('client.blog',['topic' => $blog->topic->id]) }}">{{ $blog->topic->name }}</a>
                            </div>
                        </div>
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#">{{ $blog->created_at }}</a></li>
                                <li><a href="#">By, {{ $blog->author }}</a></li>
                            </ul>
                        </div>
                        <h2 class="post-title">{{ $blog->title }}</h2>
                        <div class="post-content ck-content">
                            {!! $blog->content !!}
                        </div>
                        <div class="blog-tag-social-area">
                            <div class="bolg-tag">
                                <ul>
                                </ul>
                            </div>
                            <div class="social-area">
                                <span>Share:</span>
                                <ul class="social-link d-flex align-items-center">
                                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="blog-comments mb-120">
                            <div class="comments-title">
                                <h2>Bình luận</h2>
                            </div>
                            <ul class="comment-list">
                                @foreach($blog->comment as $item)
                                <li>
                                    <div class="single-comment mb-50 d-flex align-items-center justify-content-between flex-md-nowrap flex-wrap">
                                        <div class="comment-content">
                                            <div class="c-header d-flex align-items-center justify-content-between">
                                                <div class="author-area">
                                                    <div class="author-img">
                                                        <img style="height: 80px; width: 80px" src="{{ cxl_asset($item->user->avatar) }}" alt="">
                                                    </div>
                                                    <div class="author-details">
                                                        <h5 class="mb-0">{{ $item->user->name }}</h5>
                                                        <div class="c-date">{{ $item->created_at }}</div>
                                                    </div>
                                                </div>
                                                <div class="replay-btn">
                                                    <a href="#"><img src="{{ cxl_asset('assets/web/images/icon/replay-icon.svg') }}" alt=""></a>
                                                </div>

                                            </div>
                                            <div class="c-body">
                                                <p>{{ $item->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @if(auth()->check())
                        <div class="comment-form">
                            <div class="comments-title">
                                <h2>Bình luận của bạn:</h2>
                            </div>
                            <form method="post" action="{{ route('client.comment-store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input style="display: none" name="blog_id" value="{{ $blog->id }}"/>
                                        <div class="form-inner mb-40">
                                            <textarea name="content" placeholder="Nhập bình luận"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-inner two">
                                            <button class="primary-btn3 btn-lg" type="submit">Gửi bình luận</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
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

