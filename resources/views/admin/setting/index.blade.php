@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | الاعدادت
@endsection
@section('page_name')
    الاعدادت
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">الاعدادت</h3>
                </div>
                <div class="card-body">
                    <div class="modal-body">
                        <form id="updateForm" class="updateForm" method="POST" enctype="multipart/form-data"
                              action="{{route('settings.update',$setting->id)}}">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="form-group col-3">
                                    <label for="name" class="form-control-label">اللوجو</label>
                                    <input type="file" class="dropify" name="logo"
                                           data-default-file="{{ ($setting->logo != null) ? asset($setting->logo) : asset('assets/admin/assets/images/logo1.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                                <div class="form-group col-9">
                                    <label for="name" class="form-control-label">الغلاف</label>
                                    <input type="file" class="dropify" name="bg_img"
                                           data-default-file="{{ ($setting->bg_img != null) ? asset($setting->logo) : asset('assets/admin/assets/images/logo1.png')}}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">الاسم بالعربية</label>
                                    <input type="text" class="form-control" name="title_ar" id="name"
                                           value="{{ $setting->title_ar }}">
                                </div>
                                <div class="form-group col-6">
                                    <label for="" class="form-control-label">الاسم بالانجليزية</label>
                                    <input type="text" class="form-control" name="title_en" id="text"
                                           value="{{ $setting->title_en }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">الاسم الفرعي بالعربية</label>
                                    <input type="text" class="form-control" name="sub_title_ar" id="name"
                                           value="{{ $setting->sub_title_ar }}">
                                </div>
                                <div class="form-group col-6">
                                    <label for="" class="form-control-label">الاسم الفرعي بالانجليزية</label>
                                    <input type="text" class="form-control" name="sub_title_en" id="text"
                                           value="{{ $setting->sub_title_en }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">العنوان بالعربية</label>
                                    <input type="text" class="form-control" name="address_ar" id="name"
                                           value="{{ $setting->address_ar }}">
                                </div>
                                <div class="form-group col-6">
                                    <label for="" class="form-control-label">العنوان بالانجليزية</label>
                                    <input type="text" class="form-control" name="address_en" id="text"
                                           value="{{ $setting->address_en }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="name" class="form-control-label">الفيسبوك</label>
                                    <input type="text" class="form-control" name="facebook" id="name"
                                           value="{{ $setting->facebook }}">
                                </div>
                                <div class="form-group col-4">
                                    <label for="" class="form-control-label">تويتر</label>
                                    <input type="text" class="form-control" name="twitter" id="text"
                                           value="{{ $setting->twitter }}">
                                </div>
                                <div class="form-group col-4">
                                    <label for="" class="form-control-label">جوجل بلس</label>
                                    <input type="text" class="form-control" name="google_plus" id="text"
                                           value="{{ $setting->google_plus }}">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="name" class="form-control-label">يوتيوب</label>
                                    <input type="text" class="form-control" name="youtube" id="name"
                                           value="{{ $setting->youtube }}">
                                </div>
                                <div class="form-group col-4">
                                    <label for="" class="form-control-label">انستجرام</label>
                                    <input type="text" class="form-control" name="instagram" id="text"
                                           value="{{ $setting->instagram }}">
                                </div>
                                <div class="form-group col-4">
                                    <label for="" class="form-control-label">البريد الالكتروني</label>
                                    <input type="text" class="form-control" name="email" id="text"
                                           value="{{ $setting->email }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">الهاتف</label>
                                    <input type="text" class="form-control" name="phone" id="name"
                                           value="{{ $setting->phone }}">
                                </div>
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">الواتساب</label>
                                    <input type="text" class="form-control" name="whatsapp" id="name"
                                           value="{{ $setting->whatsapp }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="" class="form-control-label">عنوان المشاريع (url)</label>
                                    <input type="url" class="form-control" name="location_work" id="text"
                                           value="{{ $setting->location_work }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="" class="form-control-label">العنوان (url)</label>
                                    <input type="url" class="form-control" name="location" id="text"
                                           value="{{ $setting->location }}">
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">اعدادات الخدمات في الصفحة الرئيسية</h3>
                                </div>
                                <div class="card-body">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="name" class="form-control-label">الصورة المجاورة</label>
                                                <input type="file" class="dropify" name="image_service"
                                                       data-default-file="{{  asset($service->image) ?? asset('assets/admin/assets/images/logo1.png')}}"
                                                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                                <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="name" class="form-control-label">النص الرئيسي بالعربية</label>
                                                <input type="text" class="form-control" name="service_title_ar" id="name"
                                                       value="{{ $service->title_ar }}">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="name" class="form-control-label">النص الرئيسي بالانجليزية</label>
                                                <input type="text" class="form-control" name="service_title_en" id="name"
                                                       value="{{ $service->title_en }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="name" class="form-control-label">النص بالعربية</label>
                                                <textarea type="text"  rows="10" class="form-control" name="service_desc_ar" id="name">
                                                    {{ $service->desc_ar }}
                                                </textarea>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="name" class="form-control-label">النص بالانجليزية</label>
                                                <textarea type="text" rows="10" class="form-control" name="service_desc_en" id="name">
                                                    {{ $service->desc_en }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="addButton">تعديل</button>
                            </div>

                        </form>
                    </div>

                    <script>
                        $('.dropify').dropify()
                    </script>

                </div>
            </div>
        </div>
    </div>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        $(document).on('submit', 'Form#updateForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#updateForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#updateButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">انتظر ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    $('#updateButton').html(`تعديل`).attr('disabled', false);
                    if (data.status == 200) {
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success('تم التعديل بنجاح');
                    } else
                        toastr.error('هناك خطأ ما ..');

                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('هناك خطأ ما ..');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value, 'خطأ');
                                });
                            }
                        });
                    } else
                        toastr.error('هناك خطأ ما ..');
                    $('#updateButton').html(`تعديل`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>
@endsection


