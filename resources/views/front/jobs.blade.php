@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">@lang('site.careers')</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">@lang('site.careers')</span>
                </div>
            </div>
    @endsection

    <!-- section jops -->
    <div class="jops pt-5 pb-5">
        <div class="container">
            <div class="row">
                @if($jobs->count() > 0)
                @foreach($jobs as $job)
                <div class="col-lg-4 col-12">
                    <div class="card-jops pb-3 mb-3">
                        <div class="image-jops">
                            <img class="img-fluid w-100" src="{{ asset($job->image) }}" alt="no-image">
                        </div>
                        <div class="ps-3 pe-3">
                            <div class="date color-yellow mb-2">
                                <i class="fa-solid fa-clock"></i>
                                <span>{{ $job->created_at->format('Y-m-d') }}</span>
                            </div>
                            <h4 class="color-dark text-center mb-3">{{ trans_model($job,'title') }}</h4>
                            <h5 class="color-yellow mb-3">{{ lang() == 'ar' ? 'متطلبات الوظيفة' : 'Job requirements' }}</h5>
                            <ul>
                                {!! trans_model($job,'desc') !!}
                            </ul>
                            <a href="{{ route('jobDetails',$job->id) }}" class="mt-2 text-decoration-none d-flex justify-content-center">
                                <button type="submit" class="btn-project btn-icon-contact">@lang('site.More')</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="col-12 mb-4 d-flex justify-content-center">
                        <h1 class="d-flex loading-area ">{{ lang() == 'ar' ? 'لا يوجد وظائف في الوقت الحالي' : 'There are no jobs at the moment' }}</h1>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">

</script>

@endsection
