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

    <!-- section single jop -->
    <div class="single-jop pt-5 pb-5">
        <div class="container">
            <div class="title-jop content-about mb-4">
                <h5 class="color-gray">{{ trans_model($job,'title') }}</h5>
            </div>
            <h3 class="color-dark mb-3">{{ lang() == 'ar' ? 'متطلبات الوظيفة' : 'Job requirements' }}</h3>
            <ul>
                {!! trans_model($job,'desc') !!}
            </ul>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <div class="information-cv">

                    <form class="drag-file" method="post" id="formJob">
                        @csrf
                       <div class="d-flex justify-content-center">
                           <div style="width: 400px;height: 13rem" class="wrapper d-flex justify-content-center flex-column">
                               <input type="file" class="file-input" hidden name="file">
                               <i class="fa-solid fa-cloud-upload-alt"></i>
                               <p class="mt-2 text-center">{{ lang() == 'ar' ? 'ادراج الفايل' : 'Insert file' }}</p>
                               {{--                        </form>--}}
                               <section class="uploaded-area"></section>
                           </div>
                       </div>
                        <div class="row form-contact mt-5" method="post" id="formJob">
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="text" class="w-100 p-3" name="name"
                                       placeholder="{{ lang() == 'ar' ? 'الاسم' : 'the name' }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="email" class="w-100 p-3" name="email"
                                       placeholder="{{ lang() == 'ar' ? 'الايميل' : 'Email' }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="text" class="w-100 p-3" name="phone"
                                       placeholder="{{ lang() == 'ar' ? 'رقم التليفون' : 'phone number' }}" required>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-4">
                                <input type="number" class="w-100 p-3" name="salary"
                                       placeholder="{{ lang() == 'ar' ? 'المرتب الحالى' : 'current salary' }}" required>
                            </div>
                            <div class="col-12 mt-2 d-flex justify-content-center">
                                <button type="submit" id="JobBtn"
                                        class="btn-project btn-icon-contact mt-2">{{ lang() == 'ar' ? 'ارسال' : 'Send' }}</button>
                            </div>
                            <div class="col-12 mb-4 d-flex justify-content-center">
                            <span
                                class="d-flex loading-area d-none">{{ lang() == 'ar' ? 'جاري الارسال ...' : 'loading ...' }}</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">

        $('#JobBtn').on('click', function (e) {
            e.preventDefault();
            // var form = $('#contact-form');
            var formData = new FormData(document.getElementById("formJob"));
            // alert(formData.message);
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('jobStore') }}",
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
                        }, 2000)
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
                                    toastr.error('' + value);
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
