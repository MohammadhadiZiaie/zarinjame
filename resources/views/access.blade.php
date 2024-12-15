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
        <div class="row"></div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>مدیریت دسترسی ها</h4>
                    <p class="f-m-light mt-1">
                        برای مدیریت دسترسی های هر نقش ابتدا نوع کاربر را انتخاب و سپس بر اساس نوع نقش دسترسی ها را تنظیم
                        کنید.
                    </p>
                </div>
                <div class="card-body">
                    <div class="vertical-main-wizard">
                        <div class="row g-3">
                            <div class="col-xxl-3 col-xl-4 col-12">
                                <div class="nav flex-column header-vertical-wizard" id="wizard-tab" aria-selected="true"
                                    role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="wizard-contact-tab" data-bs-toggle="pill"
                                        href="#wizard-contact" role="tab" aria-controls="wizard-contact"
                                        aria-selected="true">
                                        <div class="vertical-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                            <div class="vertical-wizard-content">
                                                <h6>انتخاب نوع کاربر</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="nav-link" id="wizard-cart-tab" data-bs-toggle="pill" href="#wizard-cart"
                                        role="tab" aria-controls="wizard-cart" aria-selected="false">
                                        <div class="vertical-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa fa-chain-broken"></i></div>
                                            <div class="vertical-wizard-content">
                                                <h6>انتخاب نقش</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="nav-link" id="wizard-banking-tab" data-bs-toggle="pill"
                                        href="#wizard-banking" role="tab" aria-controls="wizard-banking"
                                        aria-selected="false">
                                        <div class="vertical-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa fa-group"></i></div>
                                            <div class="vertical-wizard-content">
                                                <h6></h6>
                                                <p>دسترسی ها</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-9 col-xl-8 col-12">
                                <div class="tab-content" id="wizard-tabContent">
                                    <div class="tab-pane fade show active" id="wizard-contact" role="tabpanel"
                                        aria-labelledby="wizard-contact-tab">
                                        <form class="row g-3 needs-validation custom-input" novalidate="">
                                            <div class="col-xxl-4 col-sm-6">
                                                <label class="form-label" for="validationCustom0-a">نوع کاربر<span
                                                        class="txt-danger">*</span></label>
                                                <select class="form-select digits" id="datalistOptions">
                                                    <option>اپراتور</option>
                                                    <option>مدیریت</option>
                                                </select>
                                                <div class="valid-feedback">به نظر خوب است</div>
                                            </div>

                                            <!-- سایر فرم ها -->
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary">بعدی</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="wizard-cart" role="tabpanel"
                                        aria-labelledby="wizard-cart-tab">
                                        <!-- انتخاب نقش -->
                                        <div class="col-xxl-4 col-sm-6">
                                            <label class="form-label" for="validationCustom0-a">نقش کاربر <span
                                                    class="txt-danger">*</span></label>
                                            <select class="form-select digits" id="datalistOptions">
                                                <option>اپراتور دوختا</option>
                                            </select>
                                            <div class="valid-feedback">به نظر خوب است</div>
                                        </div>
                                        <div class="col-12 text-end">
                                                <button class="btn btn-primary">بعدی</button>
                                            </div>
                                    </div>
                                    <div class="tab-pane fade" id="wizard-banking" role="tabpanel"
                                        aria-labelledby="wizard-banking-tab">
                                        <div class="col-12">
                                            <div class="card">
                                              <h6>انتخاب دسترسی ها</h6>
                                                <div class="card-body">
                                                    <div class="row g-3">
                                                        <div class="col-xl-4 col-sm-6">
                                                            <div
                                                                class="card-wrapper border rounded-3 h-100 checkbox-checked">
                                                                <div class="form-check checkbox checkbox-primary mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-primary-1" type="checkbox"
                                                                        checked="">
                                                                    <label class="form-check-label"
                                                                        for="checkbox-primary-1">Primary -
                                                                        checkbox-primary</label>
                                                                </div>
                                                                <div
                                                                    class="form-check checkbox checkbox-secondary mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-secondary" type="checkbox">
                                                                    <label class="form-check-label"
                                                                        for="checkbox-secondary">Secondary -
                                                                        checkbox-secondary </label>
                                                                </div>
                                                                <div class="form-check checkbox checkbox-success mb-0">
                                                                    <input class="form-check-input"
                                                                        id="checkbox-primary" type="checkbox">
                                                                    <label class="form-check-label"
                                                                        for="checkbox-primary">Success -
                                                                        checkbox-success</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 text-end">
                                                <button class="btn btn-primary">ذخیره</button>
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
            </div>
        </div>
    </div>
</div>
@endsection

@section('customeJs')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/form-wizard/form-wizard.js') }}"></script>
<script src="{{ asset('assets/js/form-wizard/image-upload.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
@endsection