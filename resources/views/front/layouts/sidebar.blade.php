@if(Route::currentRouteName() == 'home')
<!-- landing -->
<div class="landing" style="background-image: url('{{ asset($setting->bg_img) }}')">
    <div class="container pt-3">
        <!-- navbar -->
        <div class="navbar">
            <button class="btn-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="offcanvas {{ lang() == 'ar' ? 'offcanvas-end' : 'offcanvas-start' }}" tabindex="-1" id="offcanvasRight"
                 aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-body d-flex justify-content-between">
                    <div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                   href="{{ route('aboutUs') }}">@lang('site.about us')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('projects') }}">@lang('site.projects')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('requestIndex') }}">@lang('site.Register interest')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactIndex') }}">@lang('site.contact')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sells') }}">@lang('site.Sales center')</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ lang() == 'ar' ? 'اللغة' : 'Language' }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <button type="button" class="btn-close1 me-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="logo">
                <a class="text-decoration-none" href="{{ route('home') }}">
                    <img src="{{ asset($setting->logo) }}" alt="no-image" class="img-fluid">
                </a>
            </div>
        </div>
            <!-- content landing -->
            <div class="content d-flex flex-column justify-content-center mb-5">
                <h1 class="text-center text-light">{{ trans_model($setting,'title') }}</h1>
                <p class="mt-4 text-center fw-bold text-light">{{ trans_model($setting,'sub_title') }}</p>
                <div class="d-flex justify-content-center mt-4 content-search">
                    <input class="search searchInput" type="text" placeholder="{{ lang() == 'ar' ? 'عن ماذا تبحث ؟'  : 'What are you looking for ?' }}" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass icon-search"></i>
                </div>
                <div class="div-search d-flex justify-content-center">
                    <ul style="width: 500px;
                                    background-color: white;
                                    box-shadow: 0 16px 32px 0 rgba(7, 28, 31, 0.1);
                                    border-radius: 10px;
                                    padding: 10px;
                                    list-style: none;" class="d-none resultDiv">
                    </ul>
                </div>
            </div>
    </div>

    <!-- tap content -->
        <div class="tap-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                        <a href="{{ route('aboutUs') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-card d-flex justify-content-center mb-2">
                                    <img src="{{ asset('assets/front/') }}/photo/about.svg" alt="no-image">
                                </div>
                                <h5 class="text-center text-card">@lang('site.about us')</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                        <a href="{{ route('requestIndex') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-card d-flex justify-content-center mb-2">
                                    <img src="{{ asset('assets/front/') }}/photo/care.svg" alt="no-image">
                                </div>
                                <h5 class="text-center text-card">@lang('site.Register interest')</h5>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 d-flex flex-column align-items-center">
                        <a href="{{ route('projects') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="image-card d-flex justify-content-center mb-2">
                                    <img src="{{ asset('assets/front/') }}/photo/project.svg" alt="no-image">
                                </div>
                                <h5 class="text-center text-card"> @lang('site.projects')</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- landing -->
@else
    <!-- landing2 -->
    <div class="landing2">
        <div class="container">
            <div class="navbar">
                <button class="btn-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                        aria-controls="offcanvasRight">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="offcanvas {{ lang() == 'ar' ? 'offcanvas-end' : 'offcanvas-start' }}" tabindex="-1" id="offcanvasRight"
                     aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-body d-flex justify-content-between">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                       href="{{ route('aboutUs') }}">@lang('site.about us')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('projects') }}">@lang('site.projects')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('requestIndex') }}">@lang('site.Register interest')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contactIndex') }}">@lang('site.contact')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sells') }}">@lang('site.Sales center')</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ lang() == 'ar' ? 'اللغة' : 'Language' }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <button type="button" class="btn-close1 me-auto" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="logo">
                    <a class="text-decoration-none" href="{{ route('home') }}">
                        <img src="{{ asset($setting->logo) }}" alt="no-image" class="img-fluid">
                    </a>
                </div>
            </div>
            @yield('breadcrumb')
        </div>
    </div>
    @endif
