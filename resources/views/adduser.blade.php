@extends('layout.master')

@section('titlePage')
<title>پنل مدیریت زرین جامه | افزودن کاربر جدید</title>
@endsection

@section('adduser')
<div class="page-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="card height-equal" style="margin-top:50px ">
          <div class="card-header">
            <h4>افزودن کاربر جدید</h4>
            <form class="form theme-form" method="POST" action="{{ route('users.store') }}">
              @csrf
              <div class="card-body custom-input">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-sm-2">نام و نام خانوادگی</label>
                      <div class="col-sm-10">
                        <input class="form-control" name="name" type="text" placeholder="نام و نام خانوادگی">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-2">ایمیل</label>
                      <div class="col-sm-10">
                        <input class="form-control" name="email" type="email" placeholder="ایمیل">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-2">پسورد</label>
                      <div class="col-sm-10">
                        <input class="form-control" name="password" type="password" placeholder="پسورد">
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <div class="col-sm-2">
                        <label class="form-label" for="roleSelect">نوع کاربر</label>
                      </div>
                      <div class="col-sm-10">
                        <select class="form-select digits" id="roleSelect" name="role_id">
                          @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
              @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <div class="col-sm-2">
                        <label class="form-label" for="subRoleSelect">نقش کاربر (زیرنقش)</label>
                      </div>
                      <div class="col-sm-10">
                        <select class="form-select digits" id="subRoleSelect" name="sub_role">
                          <!-- زیرنقش‌ها از PHP ارسال می‌شوند -->
                          @if(isset($roleSubRoles[$role->id]) && count($roleSubRoles[$role->id]) > 0)
                @foreach($roleSubRoles[$role->id] as $subRole)
          <option value="{{ $subRole }}">{{ $subRole }}</option>
        @endforeach
              @else
          <option value="">زیرنقش موجود نیست</option>
        @endif
                        </select>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card-footer text-end">
                <div class="col-sm-9 offset-sm-3">
                  <button class="btn btn-primary me-3" type="submit">افزودن</button>
                </div>
                @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('customJs')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // برای ارسال درخواست به سرور و بارگذاری زیرنقش‌ها
  document.getElementById('roleSelect').addEventListener('change', function () {
    var roleId = this.value;
    var subRoleSelect = document.getElementById('subRoleSelect');

    // پاک کردن زیرنقش‌های قبلی
    subRoleSelect.innerHTML = '<option value="">لطفاً زیرنقش انتخاب کنید</option>';

    // ارسال درخواست به سرور برای دریافت زیرنقش‌ها
    $.ajax({
      url: '/getSubRoles',
      method: 'GET',
      data: { role_id: roleId },
      success: function (response) {
        // بارگذاری زیرنقش‌ها
        if (response.subRoles.length > 0) {
          response.subRoles.forEach(function (subRole) {
            var option = document.createElement('option');
            option.value = subRole;
            option.textContent = subRole;
            subRoleSelect.appendChild(option);
          });
        } else {
          var option = document.createElement('option');
          option.value = "";
          option.textContent = "زیرنقش موجود نیست";
          subRoleSelect.appendChild(option);
        }
      }
    });
  });
</script>
@endsection