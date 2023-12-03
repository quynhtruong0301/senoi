@extends('Admin::app')
@section('page', 'Danh mục')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 style="margin-right: 30px" class="mr-5">Tạo danh mục mới</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form method="post" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Tên danh mục
                                        </th>
                                        <td>
                                            <input type="text" class="form-control w-40" id="name" name="name"
                                                   placeholder="Nhập tên danh mục" value="{{ old('name') }}">
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Slug
                                        </th>
                                        <td>
                                            <input type="text" class="form-control w-40" id="slug" name="slug"
                                                   placeholder="Nhập slug" value="{{ old('slug') }}">
                                            @error('slug')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ảnh thực
                                        </th>
                                        <td>
                                            <input type="file" class="form-control w-40 mb-2" id="real_image"
                                                   name="real_image" placeholder="">
                                            <img id="real_image_preview" class="img-fluid w-40" src="" />
                                            @error('real_image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Ảnh ảo
                                        </th>
                                        <td>
                                            <input type="file" class="form-control w-40 mb-2" id="virtual_image"
                                                   name="virtual_image" placeholder="">
                                            <img id="virtual_image_preview" class="img-fluid w-40" src="" />
                                            @error('virtual_image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Mô tả
                                        </th>
                                        <td>
                                            <textarea class="form-control w-80" id="description" name="description"
                                                      placeholder="Nhập mô tả">{{ old('description') }}</textarea>
                                            @error('description')
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
                                <button class="btn btn-primary btn-sm w-20 mt-6">Tạo danh mục</button>
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
            $('#real_image').on('change', function (e) {
                file = e.target.files;
                _fileReader = new FileReader();
                _fileReader.readAsDataURL(file[0]);
                _fileReader.onload = function (e) {
                    $('#real_image_preview').attr('src', e.target.result);
                }
            })

            $('#virtual_image').on('change', function (e) {
                file = e.target.files;
                _fileReader = new FileReader();
                _fileReader.readAsDataURL(file[0]);
                _fileReader.onload = function (e) {
                    $('#virtual_image_preview').attr('src', e.target.result);
                }
            })
        })
    </script>
@endpush
