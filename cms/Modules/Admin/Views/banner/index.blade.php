@extends('Admin::app')
@section('page', 'Danh sách banner')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <h6 style="margin-right: 30px" class="mr-5">Danh sách banner</h6>
                            <a class="btn btn-primary btn-sm w-20" href="{{ route('admin.banner.create') }}">Thêm danh mục</a>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Ảnh
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ngày bắt đầu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ngày kết thúc
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ảnh ảo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banners as $item)
                                    <tr class="text-center">
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <img src="{{ cxl_asset($item->url) }}" class="height-200">
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->start_date }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->end_date }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->public == 1 ? "Công khai" : "Không công khai" }}</p>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn" data-bs-toggle="dropdown"
                                                   id="navbarDropdownMenuLink2">
                                                    <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                                    <li>
                                                        <a class="dropdown-item border-radius-md" href="{{ route('admin.banner.edit', ['id' => $item->id]) }}">Chỉnh sửa</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-radius-md btn_delete_item"
                                                           data-delete-url="{{ route('admin.banner.delete', ['id' => $item->id]) }}"
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
                            {{ $banners->links() }}
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
                    Bạn có chắc muốn xoá danh mục này？
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
