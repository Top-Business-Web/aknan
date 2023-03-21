<div class="modal-body">
    <div class="row">
        <div class="form-group col-6">
            <label for="name" class="form-control-label">الاسم</label>
            <h4 type="text">{{ $jobContact->name }}</h4>
        </div>
        <div class="form-group col-6">
            <label for="name" class="form-control-label">البريد الالكتروني</label>
            <h4 type="text">{{ $jobContact->email }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label for="name" class="form-control-label">الهاتف</label>
            <h4 type="text">{{ $jobContact->phone }}</h4>
        </div>
        <div class="form-group col-6">
            <label for="name" class="form-control-label">المرتب الحالي</label>
            <h4 type="text">{{ number_format($jobContact->salary,0) }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="name" class="form-control-label">الملف</label>
            <a  class="btn btn-sm btn-primary m-3" target="_blank" href="{{ asset($jobContact->file) }}" >
                <i class="fa fa-download"></i>
                تحميل الملف</a>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
    </div>
</div>

<script>
    $('.dropify').dropify()
</script>
