<!DOCTYPE html>
<html lang="en">
@include('Admin::layouts.head')
<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@include('Admin::layouts.sidebar')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('Admin::layouts.navbar')
    <!-- End Navbar -->
    @yield('main')
</main>
@include('Admin::layouts.fixed-plugin')
<!--   Core JS Files   -->
<script src="{{ cxl_asset('./assets/admin/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ cxl_asset('/assets/admin/js/core/popper.min.js') }}"></script>
<script src="{{ cxl_asset('/assets/admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ cxl_asset('/assets/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ cxl_asset('/assets/admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ cxl_asset('/assets/admin/js/plugins/chartjs.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/translations/es.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ cxl_asset('/assets/admin/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
@stack('js')
</body>

</html>
