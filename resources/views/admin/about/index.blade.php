@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | من نحن
@endsection
@section('page_name')
    من نحن
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">من نحن</h3>
                </div>
                <div class="card-body">
                    <div class="modal-body">
                        <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('about.update',$about->id)}}" >
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$about->id}}" name="id">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="name" class="form-control-label">الصورة</label>
                                    <input type="file" class="dropify" name="image"
                                           data-default-file="{{asset($about->image)}}"
                                           value="{{ asset($about->image) }}"
                                           accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                                    <span
                                        class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">العنوان بالعربية</label>
                                    <textarea type="text" rows="5" class="form-control" name="title_ar" id="name" required>
                                        {{ $about->title_ar }}
                                    </textarea>
                                </div>
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">العنوان بالانجليزية</label>
                                    <textarea type="text"  rows="5" class="form-control" name="title_en" id="name" required >
                                        {{ $about->title_en }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">النص بالعربية</label>
                                    <textarea type="text" rows="10" class="form-control" name="desc_ar" id="name" required>
                                        {{ $about->desc_ar }}
                                    </textarea>
                                </div>
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">النص بالانجليزية</label>
                                    <textarea type="text" rows="10" class="form-control" name="desc_en" id="name" required>
                                        {{ $about->desc_en }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">التفاصيل بالعربية</label>
                                    <textarea type="text"  rows="10" class="form-control" name="details_ar" id="name" required>
                                        {{ $about->details_ar }}
                                    </textarea>
                                </div>
                                <div class="form-group col-6">
                                    <label for="name" class="form-control-label">التفاصيل بالانجليزية</label>
                                    <textarea type="text" rows="10" class="form-control" name="details_en" id="name" required>
                                        {{ $about->details_en }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="updateButton">تحديث</button>
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


