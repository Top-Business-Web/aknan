<!-- footer -->
<div class="footer pt-5">
    <div class="container border-color">
        <div class="logo-footer d-flex justify-content-center mb-4">
            <a class="text-decoration-none" href="{{ route('home') }}">
                <img src="{{ asset($setting->logo) }}" alt="no-image">
            </a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projectvilla') }}"> @lang('site.villas')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projecthouse') }}">@lang('site.town house')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('maps') }}"> @lang('site.on the map')</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partners') }}"> @lang('site.partners')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobs') }}"> @lang('site.careers')</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="tel: {{ $setting->phone }}">
                            <i class="fa-solid fa-mobile-screen-button ms-2"></i>
                            <span class="phone">{{ $setting->phone }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto: {{ $setting->email }}">
                            <i class="fa-regular fa-envelope ms-2"></i>
                            <span class="email">{{ $setting->email }}</span>
                        </a>
                    </li>
                </ul>

                <div class="icon mt-3 mb-3">
                    <a href="{{ $setting->facebook }}" class="text-decoration-none">
                        <i class="fa-brands fa-facebook-f fa-lg me-4"></i>
                    </a>
                    <a href="{{ $setting->twitter }}" class="text-decoration-none">
                        <i class="fa-brands fa-twitter fa-lg me-4"></i>
                    </a>
                    <a href="{{ $setting->google_plus }}" class="text-decoration-none">
                        <i class="fa-brands fa-google-plus-g fa-lg me-4"></i>
                    </a>
                    <a href="{{ $setting->youtube }}" class="text-decoration-none">
                        <i class="fa-brands fa-youtube fa-lg me-4"></i>
                    </a>
                    <a href="{{ $setting->instagram }}" class="text-decoration-none">
                        <i class="fa-brands fa-instagram fa-lg me-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <p class="text-center"> {{ trans('site.copyright') }} {{ trans_model($setting,'title') }} {{date('Y')}}</p>
    </div>
</div>

<!-- whatsapp -->
<a href="https://wa.me/{{ $setting->whatsapp }}" target="_blank" class="whatsapp">
    <img src="{{ asset('assets/front') }}/photo/wa-whatsapp-icon.svg" alt="no-image">
</a>
