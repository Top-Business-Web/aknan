<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{route('job.update',$job->id)}}" >
    @csrf
        @method('PUT')
        <input type="hidden" value="{{$job->id}}" name="id">
        <div class="row">
            <div class="form-group col-12">
                <label for="name" class="form-control-label">الصورة</label>
                <input type="file" class="dropify" name="image"
                       data-default-file="{{asset($job->image) ?? asset($setting->image) }}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">الاسم بالعربية</label>
                <input type="text" class="form-control" name="title_ar" id="name" required value="{{ $job->title_ar }}">
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">الاسم بالانجليزية</label>
                <input type="text" class="form-control" name="title_en" id="name" required value="{{ $job->title_en }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-12">
                <label for="name" class="form-control-label">المتطلبات بالعربية</label>
                <textarea type="text" class="form-control" name="desc_ar" id="name" required>{{ $job->desc_ar }}</textarea>
            </div>
            <div class="form-group col-12">
                <label for="name" class="form-control-label">المتطلبات بالانجليزية</label>
                <textarea type="text" class="form-control" name="desc_en" id="name" required>{{ $job->desc_en }}</textarea>
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
    CKEDITOR.replace('desc_ar');
    CKEDITOR.replace('desc_en');
</script>
