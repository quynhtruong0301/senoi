@extends('Core::app')
@section('page', 'Về chúng tôi')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/web/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Về chúng tôi</h1>
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
    <div class="h1-story-area two mb-120 pt-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-6">
                    <div class="section-title1">
                        <span><img src="{{ cxl_asset('assets/web/images/icon/section-vec-l1.svg') }}" alt="">Lời giới thiệu<img src="{{ cxl_asset('assets/web/images/icon/section-vec-r1.svg') }}" alt=""></span>
                        <h2>Xin chào, cảm ơn mọi người đã đến với Sen Ơi!</h2>
                    </div>
                    <div class="story-content">
                        <p>
                            Trên thế giới này, hàng triệu động vật đang phải chịu đựng sự bạo hành và đau khổ mỗi ngày. Chúng ta có trách nhiệm đứng lên và chống lại sự tàn ác này. Chúng tôi tạo ra một cộng đồng nơi mọi người đều chung lòng với mục tiêu ngăn chặn động vật bị bạo hành và mang lại hạnh phúc cho chúng. Chúng tôi không chỉ tập trung vào việc hỗ trợ và bảo vệ những con vật yếu đuối, mà còn nỗ lực để thay đổi nhận thức và hành vi của con người đối với thế giới động vật.
                        </p>
                        <p>
                            Hãy cùng chung tay, để mỗi loài động vật đều có quyền sống trong một môi trường an toàn, yêu thương và hạnh phúc.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="story-img">
                        <img class="img-fluid" style="margin-top: 40px" src="{{ cxl_asset('assets/web/images/about-1.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h2-services-area mb-120">
        <div class="services-btm ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="services-img">
                            <div class="services-img-bg">
                                <img src="{{ cxl_asset('assets/web/images/icon/h2-services-img-bg.svg') }}" alt="">
                            </div>
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/about-2.jpeg') }}">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="services-content">
                            <h2>Đó là những người bạn trung thành của chúng ta!</h2>
                            <p>Website này ra đời với mục tiêu cao cả: kết nối những thú cưng đáng yêu với những người chủ tuyệt vời, để chúng có thể tìm được mái nhà ấm áp và cuộc sống hạnh phúc. Chúng tôi tin rằng mỗi con vật đều xứng đáng có một cuộc sống đầy đủ yêu thương và chăm sóc. Trên trang web này, bạn không chỉ tìm thấy các thông tin về những thú cưng cần được nhận nuôi, mà còn được hỗ trợ và tư vấn đầy đủ để đảm bảo rằng cả người chủ và thú cưng đều hạnh phúc và hài lòng. Hãy cùng nhau tạo nên những câu chuyện thành công, nơi mà tình cảm và niềm đam mê với động vật được lan tỏa mỗi ngày.</p>
                            <div class="author-area">
                                <div class="author-quat">
                                    <p><sup><img src="{{ cxl_asset('assets/web/images/icon/author-quat-icon.svg') }}" alt=""></sup> Yêu Thương, Chăm Sóc, Bảo Vệ - Hãy Cùng Nhau Làm Cho Thế Giới Này Trở Nên Ấm Áp Hơn!<sup><img src="{{ cxl_asset('assets/web/images/icon/author-quat-icon.svg') }}" alt=""></sup></p>
                                </div>
                                <div class="author-name-deg">
                                    <h4>Quynh Truong</h4>
                                    <span>Founder, SenOi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

