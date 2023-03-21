<div class="modal-body">
    <form id="updateForm" class="updateForm" method="POST" enctype="multipart/form-data" action="{{route('building.update',$building->id)}}">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="form-group col-12">
                <label for="name" class="form-control-label">الصورة الرئيسية</label>
                <input type="file" class="dropify" name="main_img"
                       data-default-file="{{ asset($building->main_img) ??asset($setting->logo)}}"
                       value="{{ asset($building->main_img) ??asset($setting->logo)}}"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
            </div>
            <div class="form-group col-12">
                <label for="name" class="form-control-label">الصور الفرعية</label>
                <input type="file" class="form-control" name="files[]"
                       data-default-file="{{asset($setting->logo)}}"
                       multiple="multiple"
                       accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
                <span
                    class="form-text text-danger text-center">قم بتحديد الصور عن طريق ctrl + التحديد</span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">نوع العقار</label>
                <select class="form-control" name="type" required="required">
                    <option class="form-control" value="" disabled>تحديد النوع</option>
                    <option class="form-control" {{ $building->type = 'villa' ? 'selected' : '' }} value="villa">فيلا</option>
                    <option class="form-control" {{ $building->type = 'house' ? 'selected' : '' }} value="house">تاون هاوس</option>
                </select>
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">القسم</label>
                <select class="form-control" required="required" name="services_id">
                    <option class="form-control" value="" disabled selected>تحديد القسم</option>
                    @foreach($services as $service)
                        <option class="form-control" value="{{ $service->id }}"
                            {{ $building->services_id = $service->id ? 'selected' : '' }}>
                            {{ $service->title_ar }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">الاسم بالعربية</label>
                <input type="text" class="form-control" name="title_ar" id="name" required value="{{ $building->title_ar }}">
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">الاسم بالانجليزية</label>
                <input type="text" class="form-control" name="title_en" id="name" required value="{{ $building->title_en }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-6">
                <label for="name" class="form-control-label">العنوان بالعربية</label>
                <input type="text" class="form-control" name="address_ar" id="name" required value="{{ $building->address_ar }}">
            </div>
            <div class="form-group col-6">
                <label for="name" class="form-control-label">العنوان بالانجليزية</label>
                <input type="text" class="form-control" name="address_en" id="name" required value="{{ $building->address_en }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-4">
                <label for="name" class="form-control-label">الهاتف</label>
                <input type="text" class="form-control" name="phone" id="name" required value="{{ $building->phone }}">
            </div>
            <div class="form-group col-4">
                <label for="name" class="form-control-label">البريد الالكتروني</label>
                <input type="text" class="form-control" name="email" id="name" required value="{{ $building->email }}">
            </div>
            <div class="form-group col-4">
                <label for="name" class="form-control-label">الواتساب</label>
                <input type="text" class="form-control" name="whatsapp" id="name" required value="{{ $building->whatsapp }}">
            </div>

        </div>

        <div class="row">
            <div class="form-group col-3">
                <label for="name" class="form-control-label">عدد غرف المعيشة</label>
                <input type="number" class="form-control" name="livingroom" id="name" required value="{{ $building->livingroom }}">
            </div>
            <div class="form-group col-3">
                <label for="name" class="form-control-label">عدد غرف النوم</label>
                <input type="number" class="form-control" name="bedroom" id="name" required value="{{ $building->bedroom }}">
            </div>
            <div class="form-group col-3">
                <label for="name" class="form-control-label">عدد دورات المياه</label>
                <input type="number" class="form-control" name="bathroom" id="name" required value="{{ $building->bathroom }}">
            </div>
            <div class="form-group col-3">
                <label for="name" class="form-control-label">عدد المطابخ</label>
                <input type="number" class="form-control" name="kitchen" id="name" required value="{{ $building->kitchen }}">
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
        </div>
    </form>
</div>

<script>
    $('.dropify').dropify()
</script>
