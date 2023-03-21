<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('services.update',$service->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" value="{{$service->id}}" name="id">
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image"
                       data-default-file="{{asset($service->image) ?? asset($setting->logo)}}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">اللوجو</label>
                <input type="file" class="dropify" name="logo"
                       data-default-file="{{asset($service->logo) ?? asset($setting->logo)}}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الاسم بالعربية</label>
            <input type="text" class="form-control" name="title_ar" id="name" value="{{ $service->title_ar }}" required>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الاسم بالانجليزية</label>
            <input type="text" class="form-control" name="title_en" id="name" value="{{ $service->title_en }}" required>
        </div>
        <div class="form-group">
            <label for="text" class="form-control-label">الوصف بالعربية</label>
            <textarea type="text" class="form-control" rows="10" name="desc_ar" id="name" required>{{ $service->desc_ar }}</textarea>
        </div>

        <div class="form-group">
            <label for="text" class="form-control-label">الوصف بالانجليزية</label>
            <textarea type="text" class="form-control" rows="10" name="desc_en" id="name" required>{{ $service->desc_en }}</textarea>
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
