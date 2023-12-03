@extends('Admin::app')
@section('page', 'Người dùng')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <h6 style="margin-right: 30px" class="mr-5">Danh sách người dùng</h6>
                        </div>
                        <div class="d-flex gap-4">
                            <div class="w-20">
                                <div class="input-group ">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Nhập họ tên">
                                </div>
                            </div>
                            <div class="w-20">
                                <div class="input-group ">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="w-20">
                                <div class="input-group ">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Nhập số email">
                                </div>
                            </div>
                            <div class="w-20">
                                <button class="btn btn-danger">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr class="text-center">
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tên người dùng
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Ảnh đại diện
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Địa chỉ mail
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Số điện thoại
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Coin
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    <tr class="text-center">
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            <img src="{{ cxl_asset($item->avater) }}">
                                        </td>
                                        <td class="align-middle  text-sm">
                                            {{ $item->email }}
                                        </td>
                                        <td class="align-middle ">
                                            {{ $item->phone }}
                                        </td>
                                        <td class="align-middle ">
                                            {{ $item->coin }}
                                        </td>
                                        <td class="align-middle">
                                            <div class="dropdown">
                                                <a href="#" class="btn" data-bs-toggle="dropdown"
                                                   id="navbarDropdownMenuLink2">
                                                    <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                                    <li>
                                                        <a class="dropdown-item border-radius-md" href="">Chi tiết</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-radius-md btn_delete_item"
                                                           data-delete-url="{{ route('admin.user.delete', ['id' => $item->id]) }}"
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
                            {{ $users->links() }}
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
                    Bạn có chắc muốn xoá người dùng này？
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
