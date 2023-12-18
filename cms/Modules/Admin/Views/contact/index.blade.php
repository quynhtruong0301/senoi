@extends('Admin::app')
@section('title', 'Liên hệ')
@section('main')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <h6 style="margin-right: 30px" class="mr-5">Danh sách liên hệ</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        @if(count($contacts) > 0)
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tên
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Số điện thoại
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Lời nhắn
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ngày gửi
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $item)
                                        <tr class="text-center">
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->id }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->name }}</p>
                                            </td>
                                            <td class="align-middle  text-sm">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->email }}</p>
                                            </td>
                                            <td class="align-middle ">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->phone }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->message }}</p>
                                            </td>
                                            <td class="align-middle ">
                                                <p class="text-xs font-weight-bold mb-0">{{ $item->created_at }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="dropdown">
                                                    <button class="btn bg-gradient-primary dropdown-toggle btn-sm m-0"
                                                            type="button" id="dropdownMenuButton"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li>
                                                            <a
                                                                class="dropdown-item btn_delete_item"
                                                                data-delete-url="{{ route('admin.contact.delete', ['id' => $item->id])  }}"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#confirm_delete_item"
                                                                href="#">Xoá
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                        @else
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirm_delete_item" tabindex="-1" role="dialog" aria-labelledby="confirm_delete_item"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center">
                <div class="modal-body mt-5 mb-5" id="txt-confirm">
                    Bạn có chắc muốn xoá liên hệ này ?
                </div>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <button type="button" class="btn bg-gradient-secondary w-30" data-bs-dismiss="modal">Huỷ</button>
                    <button
                        type="button"
                        class="btn bg-gradient-primary
                        btn_confirm_delete_item w-30"
                        data-bs-dismiss="modal"
                    >
                        Đồng ý
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content"),
                },
            });

            $(document).on('click', '.btn_delete_item', function () {
                let _self = $(this);
                $('#confirm_delete_item .btn_confirm_delete_item').on('click', function () {
                    $.ajax({
                        url: `${_self.attr('data-delete-url')}`,
                        type: "POST",
                        success: function (data) {
                            location.href = "{{ route('admin.contact.index') }}"
                        },
                        error: function (data) {
                            alert('Something error!');
                        },
                    });
                });
            })
        });
    </script>
@endpush
