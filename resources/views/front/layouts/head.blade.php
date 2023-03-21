<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trans_model($setting,'title') }}</title>

    <link href="{{ $setting->logo }}" rel="icon" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/bootstrap.min.css">

    <!-- TOASTR CSS -->
    @toastr_css

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/owl.theme.default.min.css">

    @if(lang() == 'ar')
    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/style.css">
    @else
        <link rel="stylesheet" href="{{ asset('assets/front/css/ltr.css') }}">
    @endif

</head>
