@extends('Core::app')
@section('page', 'Thú cưng')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/web/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Thú cưng</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="assets/web/images/bg/inner-banner-vec.png" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="assets/web/images/thu-cung.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-page pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar">
                        <div class="shop-widget">
                            <h5 class="shop-widget-title">Khoảng giá</h5>
                            <div class="range-widget">
                                <div id="slider-range" class="price-filter-range"></div>
                                <div class="mt-25 d-flex justify-content-between gap-4">
                                    <input type="number" min=100 max="499" oninput="validity.valid||(value='100');" id="min_price" class="price-range-field" />
                                    <input type="number" min=100 max="500" oninput="validity.valid||(value='500');" id="max_price" class="price-range-field" />
                                </div>
                            </div>
                        </div>
                        <div class="shop-widget">
                            <div class="check-box-item">
                                <h5 class="shop-widget-title">Danh mục</h5>
                                <div class="checkbox-container">
                                    <label class="containerss">Chó
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Mèo
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Chim
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Cá
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Thỏ
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="shop-widget">
                            <div class="check-box-item">
                                <h5 class="shop-widget-title">Giới tính</h5>
                                <div class="checkbox-container">
                                    <label class="containerss">Đực
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Cái
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="shop-widget">
                            <div class="check-box-item">
                                <h5 class="shop-widget-title">Hình thức</h5>
                                <div class="checkbox-container">
                                    <label class="containerss">Cho tặng
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Buôn bán
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="shop-widget">
                            <div class="check-box-item">
                                <h5 class="shop-widget-title">Tình trạng</h5>
                                <div class="checkbox-container">
                                    <label class="containerss">Đã bán
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="containerss">Chưa bán
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="collection-card">
                                <div class="offer-card">
                                    <span>Offer</span>
                                </div>
                                <div class="collection-img">
                                    <img class="img-gluid" src="assets/web/images/bg/category/h3-collection-01.png" alt="">
                                    <div class="view-dt-btn">
                                        <div class="plus-icon">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                        <a href="shop-details.html">View Details</a>
                                    </div>
                                    <ul class="cart-icon-list">
                                        <li><a href="cart.html"><img src="assets/web/images/icon/Icon-cart3.svg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/web/images/icon/Icon-favorites3.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="collection-content">
                                    <h4 class="text-center">
                                        <a href="shop-details.html">Bicolor lông ngắn</a>
                                    </h4>
                                    <div class="price justify-content-center">
                                        <h6>3.000.000₫</h6>
                                    </div>
                                    <div class="information text-left">
                                        <ul class="mb-0">
                                            <li>
                                                <span style="font-weight: 600">Địa chỉ: </span>Diễn Bình, Diễn Châu,
                                                Nghệ An
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Yêu thích: </span>50
                                            </li>
                                            <li>
                                                <span style="font-weight: 600">Liên hệ: </span>033******
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-70">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="paginations-area">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

