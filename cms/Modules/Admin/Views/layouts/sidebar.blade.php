<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.dashboard') }}">
            <h3>
                <b class="text-danger">S</b>
                <b class="text-warning">E</b>
                <b class="text-primary">N</b>
                <b class="text-secondary">Ơ</b>
                <b class="text-info">I</b>
                ...
            </h3>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse h-100 w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Người dùng</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'dashboard') ? "active" : "" }}" href="{{ route('admin.dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Thống kê</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'category') ? "active" : "" }}" href="{{ route('admin.category.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Danh mục</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'attribute') ? "active" : "" }}" href="{{ route('admin.attribute.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tag text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Thuộc tính</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'topic') ? "active" : "" }}" href="{{ route('admin.topic.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Chủ đề</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'blog') ? "active" : "" }}" href="{{ route('admin.blog.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Bài viết</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'pet') ? "active" : "" }}" href="{{ route('admin.pet.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Thú cưng</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'banner') ? "active" : "" }}" href="{{ route('admin.banner.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Banner</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Hệ thống</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ str_contains(url()->current(), 'user') ? "active" : "" }}" href="{{ route('admin.user.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-user-run text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Quản trị viên</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-user-run text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Lịch sử nạp tiền</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-user-run text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Giao dịch hệ thống</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
    </div>
</aside>
