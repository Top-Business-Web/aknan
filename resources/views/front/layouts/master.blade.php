<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- head -->
@include('front.layouts.head')
<!-- head -->
<body>
@php
    $images = [asset('assets/front/photo/2.jpg'),asset('assets/front/photo/3.jpg'),asset('assets/front/photo/4.jpg')];
    $rand = array_rand($images);
@endphp
<!-- preloader -->
<div class="loader">
    <img class="myimage img-fluid" src="{{ $images[$rand]  }}" alt="no-image">
</div>
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
