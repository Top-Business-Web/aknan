@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">@lang('site.Register interest')</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">@lang('site.Register interest')</span>
                </div>
            </div>
    @endsection

    <!-- section request -->
    <div class="section-request pt-5 pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-5 col-12 mb-5">
                    <h3 class="color-yellow fw-bold mb-4">{{ lang() == 'ar' ? 'مجموعة اكنان العقارية' : 'Aknan Real Estate Group' }}</h3>
                    <p class="" style="text-align: justify;">{{ lang() == 'ar' ? 'نحن ملتزمون بمساعدة عملائنا في الحصول على أفضل الحلول المتاحة في الاستثمار العقارى من خلال  متخصصين في العناية بالعميل زنفهم أفضل االختالفات الثقافية
                        للعمالء في المملكة العربية السعودية ونضمن أفضل تجربة لهم. لدينا فريق متخصصين في العقار، نحن متحمسون
                        لتحسين مهاراتنا المهنية.' : 'We are committed to assisting our clients in obtaining the best available solutions in real estate investment through specialists in customer care who understand the best cultural differences.
                         To customers in the Kingdom of Saudi Arabia and ensure the best experience for them. We have a team of real estate professionals who are passionate about it
                         To improve our professional skills.' }}</p>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-3">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/smart-home.svg">
                                <span class="color-gray">{{ lang() == 'ar' ? 'سمعة ممتازة' : 'excellent reputation' }}</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="icon-about mt-3">
                                <img class="bg-title ms-2" src="{{ asset('assets/front') }}/photo/about1.svg">
                                <span class="color-gray">{{ lang() == 'ar' ? 'أفضل الوكلاء المحليين' : 'The best local agents' }}</span>
                            </div>
                        </div>
                    </div>
                    <a class="text-decoration-none" href="contact.html">
                        <button class="btn-project btn-icon-contact mt-4">{{ lang() == 'ar' ? 'تواصل معنا' : 'Connect with us' }}</button>
                    </a>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="form-request p-3">
                        <h3 class="color-gray fw-bold mb-3 text-center">{{ lang() == 'ar' ? ' سجل معنا !' : 'Register with us!' }}</h3>
                        <div class="d-flex justify-content-center">
                            <p class="color-gray text-center mb-4">{{ lang() == 'ar' ? 'سجل اهتمامك لتكن لك الأولوية لامتلاك منزلك الأول في المشروع القادم ، أكنان خيارك الاول لشراء منزل أحلامك

' : 'Register your interest to have priority in owning your first home in the next project. Aknan is your first choice to buy your dream home' }}</p>
                        </div>
                        <form class="row form-contact" id="formRequest" method="post">
                            @csrf
                            <div class="col-md-6 col-sm-12 mb-3">
                                <input type="text" class="w-100 p-2" name="name" placeholder="{{ lang() == 'ar' ? 'الاسم' : 'the name' }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <input type="text" class="w-100 p-2" name="phone" placeholder="{{ lang() == 'ar' ? 'رقم التليفون' : 'phone number' }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <input type="text" class="w-100 p-2" name="price" placeholder="{{ lang() == 'ar' ? 'القدرة الشرائية' : 'Purchasing power' }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <input type="text" class="w-100 p-2" name="salary" placeholder="{{ lang() == 'ar' ? 'الراتب' : 'Salary' }}" required>
                            </div>
                            <div class="col-sm-12">
                                <div class="d-flex flex-sm-row flex-column">
                                    <p class="ms-3">{{ lang() == 'ar' ? 'هل يوجد التزامات مالية ؟' : 'Are there financial obligations?' }}</p>
                                    <div class="d-flex">
                                        <div class="ms-4 mt-1">
                                            <input class="form-check-input" value="yes" type="radio" name="financial" id="flexRadioDefault1" required>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ lang() == 'ar' ? 'نعم' : 'Yes' }}
                                            </label>
                                        </div>
                                        <div class="ms-4 mt-1">
                                            <input class="form-check-input" value="no" type="radio" name="financial" id="flexRadioDefault1" required>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ lang() == 'ar' ? 'لا'  : 'no'}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="d-flex flex-sm-row flex-column">
                                    <p class="ms-3">{{ lang() == 'ar' ? 'هل أنت مدعوم من وزارة الإسكان ؟' : 'Are you supported by the Ministry of Housing?' }}</p>
                                    <div class="d-flex">
                                        <div class="ms-4 mt-1">
                                            <input class="form-check-input" type="radio" value="yes" name="supported" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ lang() == 'ar' ? 'نعم' : 'Yes' }}
                                            </label>
                                        </div>
                                        <div class="ms-4 mt-1">
                                            <input class="form-check-input" type="radio" value="no" name="supported" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ lang() == 'ar' ? 'لا'  : 'no'}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-4 d-flex justify-content-center">
                                <button type="submit" class="btn-project btn-explore mt-2" id="requestBtn"> {{ lang() == 'ar' ? 'ارسال' : 'send' }}</button>
                            </div>
                            <div class="col-12 mb-4 d-flex justify-content-center">
                                <span class="d-flex loading-area d-none">{{ lang() == 'ar' ? 'جاري الارسال ...' : 'loading ...' }}</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
<script type="text/javascript">

    $('#requestBtn').on('click', function (e) {
        e.preventDefault();
        // var form = $('#contact-form');
        var formData = new FormData(document.getElementById("formRequest"));
        // alert(formData.message);
        $.ajax({
            'method': 'post',
            'type': 'POST',
            'data': formData,
            '_token': "{{ csrf_token() }}",
            'url': "{{ route('requestStore') }}",
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
