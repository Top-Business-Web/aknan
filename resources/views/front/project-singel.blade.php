@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
        @if($service)
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">{{ trans_model($service,'title') }}</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">{{ trans_model($service,'title') }}</span>
                </div>
            </div>
        @endif
    @endsection


    <!-- section single project -->
    <div class="single-project pt-5 pb-5">
        <div class="container">
            <div class="row">
                @if($service)

                <div class="col-md-6 col-12">
                    <div class="title mb-4">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid img-projects" src="{{ asset($service->logo) }}" alt="no-image">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="color-gray text-center">{{ trans_model($service,'desc') }}</p>
                        </div>
                    </div>
                </div>

                @endif
                <div class="col-md-6 col-12 d-flex justify-content-end align-items-center">
                    <div class="dropdown mb-3">
                        <button class="btn-project btn-explore  dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            {{ lang() == 'ar' ? 'تصنيفات' : 'Filter' }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('projectAll') }}">{{ lang() == 'ar' ? 'الكل' : 'All' }}</a></li>
                            @foreach($services as $val)
                                <li><a class="dropdown-item" href="{{ $val->id }}">{{ trans_model($val,'title') }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card-single-project p-3">
                            <h3 class="text-center mb-3 color-dark">{{ trans_model($project,'title') }}</h3>
                            <div class="image-single-project mb-2 d-flex justify-content-center">
                                <img class="rounded" src="{{ asset($project->main_img) }}" alt="no-image">
                            </div>
                            <div class="d-flex justify-content-center">
                            <span class="color-dark" style="font-size: 12px;">
                                <i class="fa-solid fa-location-dot color-yellow ms-1"></i>
                                {{ trans_model($project,'address') }}
                            </span>
                            </div>
                            <hr>
                            <div class="total-icon-single-project mb-2 d-flex justify-content-center">
                                <div class="ms-3">
                                    <span class="ms-1 color-dark">{{ $project->bedroom }}</span>
                                    <img src="{{ asset('assets/front') }}/photo/bedroom.svg"
                                         alt="{{ $project->bedroom }}">
                                </div>
                                <div class="ms-3">
                                    <span class="ms-1 color-dark">{{ $project->livingroom }}</span>
                                    <img src="{{ asset('assets/front') }}/photo/room.svg"
                                         alt="{{ $project->livingroom }}">
                                </div>
                                <div class="ms-3">
                                    <span class="ms-1 color-dark">{{ $project->bathroom }}</span>
                                    <img src="{{ asset('assets/front') }}/photo/pathroom.svg"
                                         alt="{{ $project->bathroom }}">
                                </div>
                                <div>
                                    <span class="ms-1 color-dark">{{ $project->kitchen }}</span>
                                    <img src="{{ asset('assets/front') }}/photo/kitchen.svg"
                                         alt="{{ $project->kitchen }}">
                                </div>
                            </div>

                            <div class="icon-single-contact d-flex justify-content-evenly mt-3">
                                <a class="text-decoration-none" href="tel: {{ $project->phone }}">
                                    <button class="btn-icon-contact">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                </a>
                                <a class="text-decoration-none" href="mailto: {{ $project->email }}">
                                    <button class="btn-icon-contact">
                                        <i class="fa-regular fa-envelope"></i>
                                    </button>
                                </a>
                                <a class="text-decoration-none" href="https://wa.me/{{ $project->whatsapp }}"
                                   target="_blank">
                                    <button class="btn-icon-contact">
                                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                                    </button>
                                </a>
                            </div>

                            <div class="details-project mt-3">
                                <div class="owl-carousel owl-theme">
                                    @foreach($project->images as $image)
                                        <div class="card-details ms-1 me-1">
                                            <img src="{{ asset($image) }}" alt="no-image">
                                            <p class="color-yellow mt-1 text-center"></p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
