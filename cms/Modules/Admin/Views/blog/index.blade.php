@extends('Admin::app')
@section('page', 'Danh mục')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <h6 style="margin-right: 30px" class="mr-5">Danh sách bài viết</h6>
                            <a class="btn btn-primary btn-sm w-20" href="{{ route('admin.blog.create') }}">Thêm Bài
                                Viết</a>
                        </div>
                        <form method="get" action="{{ route('admin.blog.index') }}">
                            <div class="d-flex justify-content-start gap-2">
                                @csrf
                                <select name="topic_id[]" class="form-control w-20">
                                    @foreach($topics as $item)
                                        <option {{ request()->get('topic_id') && in_array($item->id, request()->get('topic_id')) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
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
                                        Tiêu đề
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tác giả
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Topic
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Trạng thái
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Độ ưu tiên
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ngày tạo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $item)
                                    <tr class="text-center">
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->title }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->author }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->topic->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->public == 1 ? "Công khai" : "Không công khai" }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->order }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $item->created_at }}</p>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="btn" data-bs-toggle="dropdown"
                                                   id="navbarDropdownMenuLink2">
                                                    <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                                    <li>
                                                        <a class="dropdown-item border-radius-md"
                                                           href="{{ route('admin.blog.edit', ['id' => $item->id]) }}">Chỉnh
                                                            sửa</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-radius-md btn_delete_item"
                                                           data-delete-url="{{ route('admin.blog.delete', ['id' => $item->id]) }}"
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
                            {{ $blogs->links() }}
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc muốn xoá bài viết này？
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                    <a href="#" class="btn btn-primary btn_confirm_delete_item">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            //confirm delete
            $('.btn_delete_item').on('click', function () {
                $('#confirm_delete_item .btn_confirm_delete_item').attr('href', $(this).attr('data-delete-url'));
            })
        })
    </script>
@endpush
