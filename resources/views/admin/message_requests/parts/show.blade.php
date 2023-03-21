<div class="modal-body">
    <div class="row">
        <div class="form-group col-6">
            <label for="name" class="form-control-label">الاسم</label>
            <h4 type="text">{{ $request->name }}</h4>
        </div>
        <div class="form-group col-6">
            <label for="name" class="form-control-label">الهاتف</label>
            <h4 type="text">{{ $request->phone }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label for="name" class="form-control-label">القدرة الشرائية</label>
            <h4 type="text">{{ $request->price }}</h4>
        </div>
        <div class="form-group col-6">
            <label for="name" class="form-control-label">الراتب</label>
            <h4 type="text">{{ $request->salary }}</h4>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-6">
            <label for="name" class="form-control-label">هل يوجد التزامات مالية ؟</label>
            <h4 type="text">{{ ($request->financial  == 'yes') ? 'نعم' : 'لا' }}</h4>
        </div>
        <div class="form-group col-6">
            <label for="name" class="form-control-label">هل مدعوم من وزارة الإسكان ؟</label>
            <h4 type="text">{{ ($request->supported == 'yes') ? 'نعم' : 'لا' }}</h4>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
    </div>
</div>

<script>
    $('.dropify').dropify()
</script>
