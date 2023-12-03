@extends('Admin::app')
@section('page', 'Banner')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 style="margin-right: 30px" class="mr-5">Tạo banner mới</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form method="post" action="{{ route('admin.banner.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ngày bắt đầu
                                        </th>
                                        <td>
                                            <input required type="date" class="form-control w-40" id="start_date" name="start_date" value="{{ old('start_date') }}">
                                            @error('start_date')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ngày kết thúc
                                        </th>
                                        <td>
                                            <input required type="date" class="form-control w-40" id="end_date" name="end_date" value="{{ old('end_date') }}">
                                            @error('end_date')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ảnh
                                        </th>
                                        <td>
                                            <input type="file" class="form-control w-40 mb-2" id="image"
                                                   name="image" placeholder="">
                                            <img id="image_preview" class="img-fluid w-80" src="" />
                                            @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Trạng thái
                                        </th>
                                        <td>
                                            <select name="public" class="form-control w-40">
                                                <option {{ old('public') == 1 ? 'selected' : ''  }} value="1">Công khai</option>
                                                <option {{ old('public') == 0 ? 'selected' : ''  }} value="0">Không công khai</option>
                                            </select>
                                            @error('public')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-primary btn-sm w-20 mt-6">Tạo banner</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').on('change', function (e) {
                file = e.target.files;
                _fileReader = new FileReader();
                _fileReader.readAsDataURL(file[0]);
                _fileReader.onload = function (e) {
                    $('#image_preview').attr('src', e.target.result);
                }
            })
        })
    </script>
@endpush
