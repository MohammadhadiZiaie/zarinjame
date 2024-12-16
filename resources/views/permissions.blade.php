@extends('layout.master')

@section('titlePage')
<title>مدیریت دسترسی‌ها</title>
@endsection

@section('customCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stepsfrom.css') }}">
@endsection

@section('access')
<div class="page-body">
    <div class="container-fluid">
        <div class="card">
            <div class="container mt-5">
                <div class="card shadow-lg">
                    <div class="card-header custom-header text-center">
                        <h4>مدیریت دسترسی‌ها</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- مراحل -->
                            <div class="col-md-3">
                                <div class="steps-indicator">
                                    <div class="step active" data-step="1">
                                        <span class="label">انتخاب نوع کاربر</span>
                                    </div>
                                    <div class="step" data-step="2">
                                        <span class="label">انتخاب زیر نقش</span>
                                    </div>
                                    <div class="step" data-step="3">
                                        <span class="label">تنظیم دسترسی‌ها</span>
                                    </div>
                                </div>
                            </div>
                            <!-- محتوای فرم -->
                            <div class="col-md-9">
                                <div id="steps-container">
                                    <!-- مرحله ۱ -->
                                    <div class="step-content active" data-step="1">
                                        <h5>انتخاب نوع کاربر</h5>
                                        <select id="userRoleSelect" name="userRoleSelect" class="form-select mb-3">
                                            <option value="">انتخاب کنید...</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <button id="toStep2" class="btn btn-primary mt-3">بعدی</button>
                                    </div>

                                    <!-- مرحله ۲ -->
                                    <div class="step-content" data-step="2">
                                        <h5>انتخاب زیر نقش</h5>
                                        <select id="subRoleSelect" class="form-select mb-3"></select>
                                        <div class="d-flex justify-content-between mt-3">
                                            <button id="backToStep1" class="btn btn-secondary">مرحله قبل</button>
                                            <button id="toStep3" class="btn btn-primary">بعدی</button>
                                        </div>
                                    </div>

                                    <!-- مرحله ۳ -->
                                    <div class="step-content" data-step="3">
                                        <h5>تنظیم دسترسی‌ها</h5>
                                        <div id="accessOptions" class="form-check mb-3"></div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <button id="backToStep2" class="btn btn-secondary">مرحله قبل</button>
                                            <button id="savePermissions" class="btn btn-success">ذخیره</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customJs')
<script src="{{ asset('assets/js/stepsform.js') }}"></script>
@endsection