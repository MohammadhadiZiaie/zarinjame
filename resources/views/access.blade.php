@extends('layout.master')

@section('titlePage')
<title>پنل مدیریت زرین جامه | مدیریت دسترسی ها</title>
@endsection

@section('customCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('access')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>تنظیم دسترسی های نقش کاربران</h4>
                        <p class="f-m-light mt-1">برای تنظیم اول نوع کاربر را انتخاب کرده و سپس دسترسی نقش اون به هر بخش تنظیم کنید</p>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row justify-content-center align-items-center">
                            <div class="col-sm-2 text-center">
                                <label class="form-label" for="datalistOptions">انتخاب نوع کاربر</label>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-select digits" id="datalistOptions">
                                    <option>انتخاب نشد</option>
                                    <option value="operator">اپراتور</option>
                                    <option value="manager">مدیریت</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12" id="roleCheckboxes" style="margin-top:40px;">
                            <!-- نقش‌ها و دسترسی‌ها در اینجا بارگذاری می‌شوند -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customeJs')
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>

<script>
   $('#datalistOptions').change(function() {
    var userType = $(this).val();
    $.ajax({
        url: '/getRolesForUserType',
        method: 'GET',
        data: { user_type: userType },
        success: function(response) {
            let html = '';
            response.forEach(function(role) {
                // بررسی اینکه دسترسی ها به صورت true هستند
                for (const [permission, hasAccess] of Object.entries(role.permissions)) {
                    if (hasAccess) {
                        html += `
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="${permission}" id="role-${permission}">
                                <label class="form-check-label" for="role-${permission}">${permission.replace('_', ' ')}</label>
                            </div>
                        `;
                    }
                }
            });
            $('#roleCheckboxes').html(html);
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);  // در صورت بروز خطا
        }
    });
});
</script>
@endsection
