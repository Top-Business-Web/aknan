<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('partners.update',$partner->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" value="{{$partner->id}}" name="id">
        <div class="row">
            <div class="form-group col-12">
                <label for="name" class="form-control-label">اللوجو</label>
                <input type="file" class="dropify" name="img"
                       data-default-file="{{asset($partner->img) ?? asset($setting->logo)}}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الاسم بالعربية</label>
            <input type="text" class="form-control" name="title_ar" id="name" value="{{ $partner->title_ar }}" required>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الاسم بالانجليزية</label>
            <input type="text" class="form-control" name="title_en" id="name" value="{{ $partner->title_en }}" required>
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
