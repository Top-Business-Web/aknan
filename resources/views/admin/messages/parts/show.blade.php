<div class="modal-body">
    <div class="row">
        <div class="form-group col-12">
            <label for="name" class="form-control-label">الاسم</label>
            <h4 type="text">{{ $contact->name }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label for="name" class="form-control-label">البريد الالكتروني</label>
            <h4 type="text">{{ $contact->email }}</h4>
        </div>
        <div class="form-group col-6">
            <label for="name" class="form-control-label">الهاتف</label>
            <h4 type="text">{{ $contact->phone }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="name" class="form-control-label">الموضوع</label>
            <h4 type="text">{{ $contact->subject }}</h4>
        </div>
        <div class="form-group col-12">
            <label for="name" class="form-control-label">الرسالة</label>
            <textarea class="form-control" rows="20" disabled type="text">{{ $contact->message }}</textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
    </div>
</div>

<script>
    $('.dropify').dropify()
</script>
