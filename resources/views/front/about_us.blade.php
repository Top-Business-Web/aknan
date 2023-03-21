@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
    <!-- landing2 -->
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">@lang('site.about us')</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">@lang('site.about us')</span>
                </div>
            </div>
    @endsection
    <!-- section aboutus -->
    <div class="section-about pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 d-flex justify-content-center">
                    <div class="about-image">
                        <img class="img-fluid" src="{{ asset($about_us->image) }}" alt="no-image">
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="mt-5">
                        <h6 class="bg-title">@lang('site.about us')</h6>
                    </div>
                    <div class="mt-4">
                        <h3 class="color-dark">{{ trans_model($about_us,'title') }}</h3>
                        <p class="mt-3 color-gray" style="text-align: justify;">
                           {{ trans_model($about_us,'desc') }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-4">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/smart-home.svg">
                                <span class="color-gray">{{ lang() == 'ar' ? 'تصميم منزل ذكي' : 'Smart home design' }}</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-4">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/nature.svg">
                                <span class="color-gray">{{ lang() == 'ar' ? 'مشهد جميل حولها' : 'Beautiful scenery around' }}</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-4">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/heart.svg">
                                <span class="color-gray">{{ lang() == 'ar' ? 'أسلوب حياة استثنائي' : 'An exceptional lifestyle' }}</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-4">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/date.svg">
                                <span class="color-gray">{{ lang() == 'ar' ? 'أمن طوال أيام الأسبوع' : 'Security 7 days a week' }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 content-about">
                        <p class="color-gray">
                          {{ trans_model($about_us,'details') }}
                        </p>
                    </div>
                    <a class="text-decoration-none" href="projects.html">
                        <button class="btn-project btn-icon-contact mt-4">@lang('site.projects')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
