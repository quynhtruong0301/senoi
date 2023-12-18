@extends('Core::app')
@section('page', 'Tạo thú cưng')
@section('main')
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-btm-vec.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Tạo thú cưng</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="{{ cxl_asset('assets/web/images/bg/inner-banner-vec.png') }}" alt="">
                        </div>
                        <img class="img-fluid" style="max-height: 300px" src="{{ cxl_asset('assets/web/images/lien-he.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-5">
                    <div class="contact-left">
                        <div class="hotline mb-80">
                            <h3>Cá nhân</h3>
                            <div class="icon">
                                <img style="height: 100px; width: 100px; border-radius: 50%"
                                     src="{{ auth()->user()->avatar }}" alt="">
                            </div>
                            <div class="info">
                                <h6><a href="#">Tên: {{ auth()->user()->name }}</a></h6>
                                <h6><a href="#">+{{ auth()->user()->email }}</a></h6>
                                <h6><a href="#">+{{ auth()->user()->phone }}</a></h6>
                                <h6><a href="#">Số coin: {{ auth()->user()->coin }}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2>Thông tin thú cưng:</h2>
                        @if(auth()->user()->coin > 5)
                        <form method="post" enctype="multipart/form-data" action="{{ route('client.pet-store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner flex-column">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Giống loại</label>
                                        <select class="my-select form-control" name="category_id">
                                            @foreach($categories as $item)
                                            <option {{ old('category_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Tên</label>
                                        <input name="name" required
                                               value="{{ old('name') }}" type="text"
                                               placeholder="Nhập tên thú cưng">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner flex-column">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Cho tặng/Bán</label>
                                        <select class="form-control" name="free">
                                            <option {{ old('free') == 0 ? 'selected' : '' }} value="0">Bán</option>
                                            <option {{ old('free') == 1 ? 'selected' : '' }} value="1">Cho tặng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Ảnh</label>
                                        <input multiple name="images[]" class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Giá</label>
                                        <input name="price" class="form-control" required
                                               value="{{ old('price') }}" type="text"
                                               placeholder="Nhập giá">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Mô tả</label>
                                        <textarea class="form-control" name="description" required placeholder="Mô tả...">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="flex-column">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Đặc điểm</label>
                                        <select multiple class="my-select form-control" name="attributes[]">
                                            @foreach($attributes as $item)
                                                <option {{ old('attributes') && in_array($item->id, old('attributes')) ? 'selected' : '' }} style="text-transform: capitalize" value="{{ $item->id }}">{{ $item->type . ' ' . $item->display_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner flex-column">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Tỉnh/Thành phố</label>
                                        <select class="my-select form-control" name="province_id">
                                            @foreach($provinces as $item)
                                                <option {{ old('province_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner flex-column">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Quận/Huyện</label>
                                        <select class="my-select form-control" name="district_id">
                                            @foreach($districts as $item)
                                            <option {{ old('district_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-40">
                                    <div class="form-inner flex-column">
                                        <label style="font-weight: 600; font-size: 18px; margin-bottom: 10px">Xã/Phường</label>
                                        <select class="my-select form-control" name="ward_id">
                                            @foreach($wards as $item)
                                                <option {{ old('ward_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button type="submit" class="primary-btn1">Tạo mới<i class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @else
                            <p class="text-danger">Số coin của bạn không đủ, vui lòng nạp thêm để tạo bài viết!</p>
                            <a class="btn btn-primary" href="{{ route('client.payment') }}">Nạp ngay</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(document).ready(function() {
                $('.my-select').select2();
            });
        })
    </script>
@endpush

