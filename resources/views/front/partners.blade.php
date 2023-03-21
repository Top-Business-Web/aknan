@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">@lang('site.partners')</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">@lang('site.partners')</span>
                </div>
            </div>
    @endsection

    <!-- section partners -->
    <div class="section-partners pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($partners as $partner)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card-partner pb-3 mb-3">
                            <div class="image-partner">
                                <img class="img-fluid" src="{{ asset($partner->img) }}" alt="no-image">
                            </div>
                            <h4 class="color-yellow mb-2 mt-3 text-center">{{ trans_model($partner,'title') }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
