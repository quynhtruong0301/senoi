@extends('Admin::app')
@section('page', 'Topic')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <h6 style="margin-right: 30px" class="mr-5">Tạo topic mới</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form method="post" action="{{ route('admin.topic.update', ['id' => $topic->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 p-3">
                                            Tên topic
                                        </th>
                                        <td>
                                            <input type="text" required class="form-control w-40" id="name" name="name"
                                                   placeholder="Nhập giá trị" value="{{ old('name', $topic->name) }}">
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
                                            <input type="text" required class="form-control w-40" id="slug" name="slug"
                                                   placeholder="Nhập giá trị" value="{{ old('slug', $topic->slug) }}">
                                            @error('slug')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <button class="btn btn-primary btn-sm w-20 mt-6">Tạo topic</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
