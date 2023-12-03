<!DOCTYPE html>
<html lang="en">

@include('Core::layouts.head')

<body class="home-pages-2">

@include('Core::layouts.topbar')

@include('Core::layouts.header')

@yield('main')

@include('Core::layouts.footer')
</body>
<script src="{{ cxl_asset('assets/web/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery-ui.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/swiper-bundle.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery.nice-select.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/morphext.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/odometer.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery.marquee.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/viewport.jquery.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/SmoothScroll.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery.nice-number.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ cxl_asset('assets/web/js/main.js') }}"></script>
@stack('js')
</html>
