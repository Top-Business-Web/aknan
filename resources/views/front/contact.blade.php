@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">@lang('site.contact')</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">@lang('site.contact')</span>
                </div>
            </div>
    @endsection

    <!-- section contact us -->

    <div class="section-contact pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="contact-card">
                        <p class="" style="text-align: justify;">
                           {{ lang() == 'ar' ? 'لدينا خطط للدفع سهلة تناسب احتياجات السعوديين في الرياض وخارجها، و في عام 2021 باعت وكالتنا أكثر من 2500 منزل، تتطور وكالتنا بشكل سريع ، وهو ما يمكن لعمالئنا رؤيته من خالل أرقام المبيعات المتزايدة لدينا، على الرغم من أن سوق العقارات في الرياض تحديدًا قد بدأ لتوه في استخدام حلول تكنولوجيا المعلومات ، فإننا نستثمر بنشاط في تطوير أدوات تكنولوجيا المعلومات الخاصة بنا.' : 'We have easy payment plans that suit the needs of Saudis in Riyadh and abroad, and in 2021 our agency sold more than 2,500 homes. Our agency is developing rapidly, which our clients can see through our increasing sales numbers, although the real estate market in Riyadh in particular has started Just in using IT solutions, we are actively investing in developing our own IT tools.' }}
                        </p>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="sells.html">
                                    <i class="fa-solid fa-location-dot ms-2"></i>
                                    <span class="email">{{ trans_model($setting,'address') }}</span>
                                </a>
                            </li>
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
                        <a class="text-decoration-none" href="{{ route('projects') }}">
                            <button class="btn-project btn-icon-contact mt-4">@lang('site.More')</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="contact-info text-center mt-5">
                        <h3 class="color-yellow fw-bold mb-2">{{ lang() == 'ar' ? 'محتار ومحتاج مساعدة؟': 'Confused and need help?' }}</h3>
                        <p class="color-gray mb-4">{{ lang() == 'ar' ? 'سجل بيانتك سيتصل بك مستشار المبيعات': 'Enter your details and a sales consultant will contact you' }}</p>
                    </div>
                    <form class="row form-contact" method="post" id="formContact">
                        @csrf
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" class="w-100 p-2" name="name" placeholder="{{ lang() == 'ar' ? 'الاسم' : 'the name' }}" required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="email" class="w-100 p-2" name="email" placeholder="{{ lang() == 'ar' ? 'الايميل' : 'Email' }}" required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" class="w-100 p-2" name="phone" placeholder="{{ lang() == 'ar' ? 'رقم التليفون' : 'phone number' }}" required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" class="w-100 p-2" name="subject" placeholder="{{ lang() == 'ar' ? 'الموضوع' : 'the topic' }}" required>
                        </div>
                        <div class="col-12">
                            <textarea class="w-100 p-2" name="message" placeholder="{{ lang() == 'ar' ? 'الرسالة' : 'the message' }}" required></textarea>
                        </div>
                        <div class="col-12 mt-3 mb-4">
                            <button type="submit" class="btn-project btn-icon-contact mt-2" id="contactBtn">ارسال</button>
                        </div>
                        <div class="col-12 mb-4 d-flex justify-content-center">
                            <span
                                class="d-flex loading-area d-none">{{ lang() == 'ar' ? 'جاري الارسال ...' : 'loading ...' }}</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">

    $('#contactBtn').on('click', function (e) {
        e.preventDefault();
        // var form = $('#contact-form');
        var formData = new FormData(document.getElementById("formContact"));
        // alert(formData.message);
        $.ajax({
            'method': 'post',
            'type': 'POST',
            'data': formData,
            '_token': "{{ csrf_token() }}",
            'url': "{{ route('contactStore') }}",
            beforeSend: function (data) {
                $('.loading-area').removeClass('d-none');
            },
            success: function (data) {
                if (data.status === 200) {
                    toastr.success('{{ lang() == 'ar' ? 'تم ارسال الرسالة بنجاح' : 'message sent successfully'  }}');
                    $('#contactForm input').val('');
                    $('.loading-area').html('');
                    setTimeout(function () {
                        window.location.reload();
                    },2000)
                }
            },
            error: function (data) {
                if (data.status === 500) {
                    toastr.error('{{ lang() == 'ar' ? 'خطأ في إرسال الرسالة !!' : 'error sending message !!' }}');
                } else if (data.status === 422) {
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        // alert(value);
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                toastr.error(''+value);
                                // alert(value);
                            });
                        }
                    });
                    $('.loading-area').html('error');
                }
            }
            ,
            cache: false,
            processData: false,
            contentType: false
        })
    })
</script>

@endsection
