@extends('Core::app')
@section('page', 'Bài viết')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/web/images/bg/inner-banner-btm-vec.png" alt="">
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
                            <img class="img-fluid" src="assets/web/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="assets/web/images/bai-viet.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-grid-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center mb-70">
                <div class="col-lg-8">
                    <div class="blog-st-card mb-60">
                        <div class="blog-img">
                            <img class="img-fluid" src="assets/web/images/blog/blog-st-1.png" alt="">
                            <div class="category">
                                <a href="blog-grid.html">Chia sẻ kinh nghiệm</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="blog-grid.html">05/10/2023</a></li>
                                    <li><a href="blog-grid.html">By, Administrator</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Chi sẻ kinh nghiệm xử lý khi chó, mèo có dấu hiệu nôn mửa không ngừng</a></h4>
                            <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie dultona vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone posuere scelerisque justo in accumsan an tobanikon orphagomton.</p>
                            <div class="more-btn">
                                <a href="blog-details.html"><span></span>Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-st-card mb-60">
                        <div class="blog-img">
                            <img class="img-fluid" src="assets/web/images/blog/blog-st-1.png" alt="">
                            <div class="category">
                                <a href="blog-grid.html">Chia sẻ kinh nghiệm</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="blog-grid.html">05/10/2023</a></li>
                                    <li><a href="blog-grid.html">By, Administrator</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Chi sẻ kinh nghiệm xử lý khi chó, mèo có dấu hiệu nôn mửa không ngừng</a></h4>
                            <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie dultona vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone posuere scelerisque justo in accumsan an tobanikon orphagomton.</p>
                            <div class="more-btn">
                                <a href="blog-details.html"><span></span>Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="paginations-area d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-left-short"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="bi bi-arrow-right-short"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="single-widgets widget_egns_categoris mb-30">
                            <div class="widget-title">
                                <h3>Chủ đề</h3>
                            </div>
                            <ul class="wp-block-categoris-cloud">
                                <li><a href="#"><span>Chia sẻ kinh nghiệm</span> <span><span class="number-of-categoris"></span><i class="bi bi-arrow-right-short"></i></span></a></li>
                                <li><a href="#"><span>Hỗ trợ chăm sóc</span> <span><span class="number-of-categoris"></span><i class="bi bi-arrow-right-short"></i></span> </a></li>
                                <li><a href="#"><span>Bệnh viện uy tín</span> <span><span class="number-of-categoris"></span><i class="bi bi-arrow-right-short"></i></span> </a></li>
                                <li><a href="#"><span>Chủ đề khác</span> <span><span class="number-of-categoris"></span><i class="bi bi-arrow-right-short"></i></span> </a></li>
                            </ul>
                        </div>

                        <div class="single-widgets widget_egns_recent_post mb-30">
                            <div class="widget-title">
                                <h3>Bài viết mới</h3>
                            </div>
                            <div class="recent-post-wraper">
                                <div class="widget-cnt mb-25">
                                    <div class="wi">
                                        <a href="blog-details.html"><img src="assets/web/images/blog/blog-sidebar-1.png" alt="image"></a>
                                    </div>
                                    <div class="wc">
                                        <a href="blog-grid.html">05/10/2023</a>
                                        <h6><a href="blog-details.html">Hướng dẫn đỡ đẻ cho chó, mèo</a></h6>
                                    </div>
                                </div>
                                <div class="widget-cnt mb-25">
                                    <div class="wi">
                                        <a href="blog-details.html"><img src="assets/web/images/blog/blog-sidebar-1.png" alt="image"></a>
                                    </div>
                                    <div class="wc">
                                        <a href="blog-grid.html">05/10/2023</a>
                                        <h6><a href="blog-details.html">Hướng dẫn đỡ đẻ cho chó, mèo</a></h6>
                                    </div>
                                </div>
                                <div class="widget-cnt">
                                    <div class="wi">
                                        <a href="blog-details.html"><img src="assets/web/images/blog/blog-sidebar-1.png" alt="image"></a>
                                    </div>
                                    <div class="wc">
                                        <a href="blog-grid.html">05/10/2023</a>
                                        <h6><a href="blog-details.html">Hướng dẫn đỡ đẻ cho chó, mèo</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-widgets widget_egns_tag mb-30">
                            <div class="widget-title">
                                <h3>Nội dung liên quan</h3>
                            </div>
                            <p class="wp-block-tag-cloud">
                                <a href="#">Chó</a>
                                <a href="#">Mèo</a>
                                <a href="#">Sức khoẻ</a>
                                <a href="#">Bệnh viện</a>
                                <a href="#">Thực phẩm</a>
                            </p>
                        </div>

                        <div class="single-widgets widget_egns_social">
                            <div class="widget-title">
                                <h3>Social</h3>
                            </div>
                            <ul class="social-link d-flex align-items-center">
                                <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="bx bxl-tiktok"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

