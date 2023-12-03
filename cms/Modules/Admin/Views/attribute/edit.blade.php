@extends('Admin::app')
@section('page', 'Thuộc tính')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 style="margin-right: 30px" class="mr-5">Chỉnh sửa thuộc tính</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form method="post" action="{{ route('admin.attribute.update', ['id' => $attribute->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Thuộc tính
                                        </th>
                                        <td>
                                            <select name="type" class="form-control w-40">
                                                <option {{ old('type') && old('type') == 'color' ? 'selected' : $attribute->type == 'color' ? 'selected' : '' }} value="color">Màu sắc</option>
                                                <option {{ old('type') && old('type') == 'nation' ? 'selected' : $attribute->type == 'nation' ? 'selected' : ''  }} value="nation">Quốc tịch</option>
                                                <option {{ old('type') && old('type') == 'gender' ? 'selected' : $attribute->type == 'gender' ? 'selected' : ''  }} value="nation">Giới tính</option>
                                            </select>
                                            @error('type')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Giá trị
                                        </th>
                                        <td>
                                            <input type="text" class="form-control w-40" id="value" name="value"
                                                   placeholder="Nhập giá trị" value="{{ old('value') ? old('value') : $attribute->value }}">
                                            @error('value')
                                            <small class="tthịxt-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Tên hiển thị
                                        </th>
                                        <td>
                                            <input type="text" class="form-control w-40" id="display_name" name="display_name"
                                                   placeholder="Nhập tên hiển " value="{{ old('display_name') ? old('display_name') : $attribute->display_name }}">
                                            @error('display_name')
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
                                                <option {{ old('public') && old('public') == 1 ? 'selected' : $attribute->public == 1 ? 'selected' : ''  }} value="1">Công khai</option>
                                                <option {{ old('public') && old('public') == 0 ? 'selected' : $attribute->public == 0 ? 'selected' : ''  }} value="0">Không công khai</option>
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
                                <button class="btn btn-primary btn-sm w-20 mt-6">Chỉnh sửa thuộc tính</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
