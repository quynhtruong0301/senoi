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
                        <h1>Thú cưng của tôi</h1>
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
    <div class="shop-page pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row g-4 justify-content-center">
                        @foreach($pets as $item)
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
                    <div class="row pt-70">
                        <div class="col-lg-12 d-flex justify-content-center">
                            {{ $pets->withQueryString()->links('Core::pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

