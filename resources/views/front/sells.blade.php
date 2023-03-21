@extends('front.layouts.master')

@section('content')

    @section('breadcrumb')
            <div class="mt-4">
                <h1 class="text-center text-light mb-3">{{ lang() == 'ar' ? 'مركز المبيعات' : 'Sales center' }}</h1>
                <div class="d-flex justify-content-center content-landing">
                    <a href="{{ route('home') }}" class="text-decoration-none ms-2">@lang('site.home')</a>/
                    <span class="me-2">{{ lang() == 'ar' ? 'مركز المبيعات' : 'Sales center' }}</span>
                </div>
            </div>
    @endsection

    <!-- section maps -->

    <div class="section-maps mt-3">
        <div class="container-fluid">
            <div>
                <iframe src="{{ $setting->location }}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
