@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
    <!-- landing2 -->
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">@lang('site.projects')</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">@lang('site.projects')</span>
                </div>
            </div>
    @endsection
    <!-- section project -->

    <div class="section-project pt-5 pb-5">
        <div class="container">
            <div class="mt-2 mb-4 title">
                <h3 class="color-dark text-center fw-bold mb-2"> @lang('site.projects')</h3>
                <div class="d-flex justify-content-center">
                    <p class="color-gray text-center">
                        {{ lang() == 'ar' ? 'قمنا بتصميم ”مساكن أكنان“ التي تستحقون
                        العيش بها وأن تكون جزء من ذكرياتكم الجميلة.' : 'We designed the “Aknan Residences” you deserve
                         Live it up and be a part of your beautiful memories.' }}
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                <div class="col-md-4 col-sm-6 col-12 d-flex flex-column jus align-items-center mb-3">
                    <div class="total-card">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid img-projects" src="{{ asset($service->logo) }}" alt="no-image">
                        </div>
                        <div class="card-projects" style="background-image: url('{{ asset($service->image) }}')">
                            <h5 class="text-center text-light">{{ trans_model($service,'title') }}</h5>
                            <a class="text-center text-decoration-none more" href="{{ route('project',$service->id) }}">المزيد</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
