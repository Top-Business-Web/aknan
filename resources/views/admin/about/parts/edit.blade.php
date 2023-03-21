<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('partners.update',$about->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" value="{{$about->id}}" name="id">
        <div class="row">
            <div class="form-group col-12">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image"
                       data-default-file="{{asset($setting->image)}}"
                       value="{{ asset($about->image) }}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">العنوان بالعربية</label>
                <input type="text" class="form-control" name="title_ar" id="name" required value="{{ $about->title_ar }}">
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">العنوان بالانجليزية</label>
                <input type="text" class="form-control" name="title_en" id="name" required value="{{ $about->title_en }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">النص بالعربية</label>
                <input type="text" class="form-control" name="desc_ar" id="name" required value="{{ $about->desc_ar }}">
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">النص بالانجليزية</label>
                <input type="text" class="form-control" name="desc_en" id="name" required value="{{ $about->desc_en }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">التفاصيل بالعربية</label>
                <input type="text" class="form-control" name="details_ar" id="name" required value="{{ $about->details_ar }}">
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">التفاصيل بالانجليزية</label>
                <input type="text" class="form-control" name="details_en" id="name" required value="{{ $about->details_en }}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-success" id="updateButton">تحديث</button>
        </div>
    </form>
</div>
<script>
    $('.dropify').dropify()
</script>
