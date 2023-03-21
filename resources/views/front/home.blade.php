@extends('front.layouts.master')

@section('content')
<!-- section services -->
<div class="services pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="mt-5">
                    <h6 class="bg-title"> @lang('site.services')</h6>
                    <div class="mt-4">
                        <h3 class="color-dark fw-bold">{{ trans_model($service,'title')  }}</h3>
                        <p class="mt-3 color-gray" style="text-align: justify;">{{ trans_model($service,'desc') }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-4">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/smart-home.svg">
                                <span class="color-gray">@lang('site.excellent reputation')</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-4">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/about1.svg">
                                <span class="color-gray">@lang('site.The best local agents')</span>
                            </div>
                        </div>
                    </div>
                    <a class="text-decoration-none" href="{{ route('projects') }}">
                        <button class="btn-project btn-icon-contact mt-4">@lang('site.services')</button>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="service-image mt-5">
                    <img class="img-fluid" src="{{  asset($service->image) }}" alt="service">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section services -->
<!-- request -->
<div class="request">
    <div class="container">
        <div class="card-request">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <h3 class="color-gray fw-bold mb-4">@lang('site.Aknan Real Estate Group')</h3>
                    <p class="text-light" style="text-align: justify;">@lang('site.We are committed to helping our customers get better
                         Solutions available in real estate investment through specialists in customer care.... ...')</p>
                    <a class="text-decoration-none" href="{{ route('aboutUs') }}">
                        <button class="btn-project btn-icon-contact mt-2">@lang('site.More')</button>
                    </a>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="card-request2">
                        <h3 class="color-gray fw-bold mb-3">@lang('site.Register with us!')</h3>
                        <p class="color-gray" style="text-align: justify;">@lang('site.We take pride in everything we do, developing selling platforms
                             Innovative real estate
                             and CRM systems for our clients, so these new tools and options help find the best properties
                             and submit it
                             to our customers.')</p>
                        <a class="text-decoration-none" href="{{ route('requestIndex') }}">
                            <button class="btn-project btn-explore mt-2">@lang('site.Register now')</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact -->
<div class="contact mb-5 d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="">
            <h3 class="text-light mb-4 text-center fw-bold">@lang('site.Looking for your dream home?')</h3>
            <p class="text-light text-center">@lang('site.Our company will help you achieve your dream of having a new home')</p>
            <div class="d-flex justify-content-center">
                <a class="text-decoration-none" href="{{ route('projects') }}">
                    <button class="btn-project btn-explore mt-4">@lang('site.start now')</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- partener -->
<div class="partener pt-5">
    <div class="container">
        <div class="d-flex justify-content-center"><h6 class="bg-title">@lang('site.partners')</h6></div>
        <div class="mt-2">
            <h3 class="color-dark text-center fw-bold mb-2"> @lang('site.partners')</h3>
            <p class="color-gray text-center"></p>
        </div>

        <div class="mt-5" style="direction: ltr;">
            <div class="owl-carousel owl-theme">
                @foreach($partners as $partner)
                <div class="card-partener">
                    <img src="{{ asset($partner->img) }}" alt="{{ trans_model($partner,'title') }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
