@extends('layout.master')

@section('titlePage')

<title>پنل مدیریت زرین جامه |مدیریت دسترسی ها</title>

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
                    <h4>تنظیم دسترسی های نقش کاربران </h4>
                    <p class="f-m-light mt-1">
                برای تنظیم اول نوع کاربر را انتخاب کرده و سپس دسترسی نقش اون به هر بخش        
                </p>
                  </div>        
                  
                  <div class="card-body ">

                  <div class="mb-3 row justify-content-center align-items-center">
  <div class="col-sm-2 text-center">
    <label style="margin-top:10px;" class="form-label" for="datalistOptions">انتخاب نوع کاربر</label>
  </div>
  <div class="col-sm-6">
    <select class="form-select digits" id="datalistOptions">
      <option>امنخاب نشه</option>
      <option>اپراتور</option>
      <option>مدیریت</option>
    </select>
  </div>
                    </div>



                    <div class="col-12" style="margin-top:20px;margin-bottom:25px">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="row g-3">
                      
                      <div class="col-xl-12 col-sm-12 order-xl-0 order-sm-1">
                        <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                          <h6 class="sub-title">مدیر /اپراتور </h6>
                          <div class="form-check checkbox checkbox-primary ps-0 main-icon-checkbox">
                            <ul class="checkbox-wrapper">
                              
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon1" type="checkbox" checked="">
                                <label class="form-check-label" for="checkbox-icon1"><i class="fa fa-user"> </i><span>User </span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon2" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon2"><i class="fa fa-tags"> </i><span>Tags</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon3" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon3"><i class="fa fa-android"></i><span>Android </span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon4" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon4"><i class="fa fa-eye-slash"></i><span>Hidden</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon5" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon5"><i class="fa fa-folder-open"></i><span>Folder</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon6" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon6"><i class="fa fa-paper-plane"></i><span>ارسال</span></label>
                              </li>
                              <li> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon7" type="checkbox">
                                <label class="form-check-label" for="checkbox-icon7"><i class="fa fa-cloud-upload"></i><span>آپلود</span></label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
                    </div>


                    <div class="row justify-content-center"> 
  <div class="col-xl-6 col-sm-12 order-xl-0 order-sm-1">
    <div class="card-wrapper border rounded-3 h-100 checkbox-checked text-center"> <!-- اضافه کردن text-center -->
      <h6 class="sub-title">دسترسی اپراتور/اپراتور</h6>
      <div class="form-check checkbox checkbox-primary ps-0 main-icon-checkbox">
        <ul class="checkbox-wrapper">
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon" type="checkbox">
            <label class="form-check-label" for="checkbox-icon"><i class="fa fa-sliders"></i><span>Sliders</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon1" type="checkbox" checked="">
            <label class="form-check-label" for="checkbox-icon1"><i class="fa fa-user"></i><span>User</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon2" type="checkbox">
            <label class="form-check-label" for="checkbox-icon2"><i class="fa fa-tags"></i><span>Tags</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon3" type="checkbox">
            <label class="form-check-label" for="checkbox-icon3"><i class="fa fa-android"></i><span>Android</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon4" type="checkbox">
            <label class="form-check-label" for="checkbox-icon4"><i class="fa fa-eye-slash"></i><span>Hidden</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon5" type="checkbox">
            <label class="form-check-label" for="checkbox-icon5"><i class="fa fa-folder-open"></i><span>Folder</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon6" type="checkbox">
            <label class="form-check-label" for="checkbox-icon6"><i class="fa fa-paper-plane"></i><span>ارسال</span></label>
          </li>
          <li>
            <input class="form-check-input checkbox-shadow" id="checkbox-icon7" type="checkbox">
            <label class="form-check-label" for="checkbox-icon7"><i class="fa fa-cloud-upload"></i><span>آپلود</span></label>
          </li>
        </ul>
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
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>

@endsection