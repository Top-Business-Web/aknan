<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- head -->
@include('front.layouts.head')
<!-- head -->
<body>
<!-- preloader -->
{{--<div class="loader">--}}
{{--    <img class="myimage img-fluid" src="{{ asset('assets/front/') }}/photo/2.jpg" alt="no-image">--}}
{{--</div>--}}
<!-- preloader -->

<!-- sidebar -->
@include('front.layouts.sidebar')
<!-- sidebar -->

<!-- content -->
@yield('content')
<!-- content -->

<!-- footer -->
@include('front.layouts.footer')
<!-- footer -->

<!-- script -->
@include('front.layouts.script')
<!-- script -->
@toastr_js
@toastr_render
</body>
</html>
