@extends('Admin::app')
@section('page', 'Thuộc tính')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <h6 style="margin-right: 30px" class="mr-5">Danh sách thuộc tính</h6>
                            <a class="btn btn-primary btn-sm w-20" href="{{ route('admin.attribute.create') }}">Thêm thuộc tính</a>
                        </div>
                        <form method="get" action="{{ route('admin.attribute.index') }}">
                            <div class="d-flex justify-content-start gap-2">
                                @csrf
                                <select name="type[]" class="form-control w-20">
                                    <option {{ request()->get('type') && in_array('fun-color', request()->get('type')) ? 'selected' : '' }} value="fur-color">Màu lông</option>
                                    <option {{ request()->get('type') && in_array('purebred', request()->get('type')) ? 'selected' : '' }} value="purebred">Thuần chủng</option>
                                    <option {{ request()->get('type') && in_array('foot-type', request()->get('type')) ? 'selected' : '' }} value="foot-type">Kiểu chân</option>
                                    <option {{ request()->get('type') && in_array('ear-type', request()->get('type')) ? 'selected' : '' }} value="ear-type">Kiểu tai</option>
                                    <option {{ request()->get('type') && in_array('eye-color', request()->get('type')) ? 'selected' : '' }} value="eye-color">Màu mắt</option>
                                    <option {{ request()->get('type') && in_array('nation', request()->get('type')) ? 'selected' : '' }} value="nation">Quốc tịch</option>
                                    <option {{ request()->get('type') && in_array('gender', request()->get('type')) ? 'selected' : '' }} value="gender">Giới tính</option>
                                </select>
                                <select name="public[]" class="form-control w-20">
                                    <option {{ request()->get('public') && in_array(1, request()->get('public')) ? 'selected' : '' }} value="1">Công khai</option>
                                    <option {{ request()->get('public') && in_array(0, request()->get('public')) ? 'selected' : '' }} value="0">Không công khai</option>
                                </select>
                                <button class="btn btn-danger mb-0">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Thuộc tính
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Giá trị
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Hiển thị
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Trạng thái
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($attributes as $item)
                                    <tr class="text-center">
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->type }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->value }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->display_name  }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->public == 1 ? "Công khai" : "Không công khai"  }}</p>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn" data-bs-toggle="dropdown"
                                                   id="navbarDropdownMenuLink2">
                                                    <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                                    <li>
                                                        <a class="dropdown-item border-radius-md" href="{{ route('admin.attribute.edit', ['id' => $item->id]) }}">Chỉnh sửa</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-radius-md btn_delete_item"
                                                           data-delete-url="{{ route('admin.attribute.delete', ['id' => $item->id]) }}"
                                                           data-bs-toggle="modal"
                                                           data-bs-target=#confirm_delete_item
                                                           href="javascript:;">Xóa</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination">
                            {{ $attributes->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirm_delete_item">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông báo:</h5>
                </div>
                <div class="modal-body">
                    Bạn có chắc muốn xoá thuộc tính này？
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                    <a href="#" class="btn btn-primary btn_confirm_delete_item">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //delete
            $('.btn_delete_item').on('click', function () {
                let deleteUrl = $(this).attr('data-delete-url');
                $('#confirm_delete_item .btn_confirm_delete_item').on('click', function () {
                    $.ajax({
                        url: deleteUrl,
                        type: "POST",
                        data: {
                            action: 'delete'
                        },
                        success: function (data) {
                            data.status == 200 ? location.reload() : alert('delete failed');
                        },
                        error: function (data) {
                            alert('delete failed');
                        },
                    });
                });

            })
        })
    </script>
@endpush
