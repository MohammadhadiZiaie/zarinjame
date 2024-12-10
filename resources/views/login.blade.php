<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="سیستم کنترل و مدیریت فرآیند تولید پوشاک زرین جامه.">
    <meta name="keywords" content="مدیریت تولید، سیستم پوشاک، نرم‌افزار مدیریت انبار، سیستم گزارش‌گیری">
    <meta name="author" content="زرین جامه">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>ورود - سیستم کنترل تولید زرین جامه</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <style>
      html, body {
        font-family: Vazirmatn, sans-serif !important;
      }
    </style>
    <!-- فایل‌های CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
  </head>
  <body>
    <!-- صفحه ورود -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5">
          <img class="bg-img-cover bg-center" src="{{ asset('images/BG/LoginBackground2.jpg') }}" alt="صفحه ورود">
          <div>
            <a class="logo text-start" href="#">
              <img class="img-fluid for-light img-center" src="{{ asset('images/logo/Zarinjame-logo-white.png') }}" alt="لوگو">
              <img class="img-fluid for-dark img-center " src="{{ asset('images/logo/logo_dark.png') }}" alt="لوگو">
            </a>
          </div>
        </div>
        <div class="col-xl-7 p-0">
          <div class="login-card login-dark">
            <div class="login-main">
              <form id="login-form" method="POST" action="{{ route('login') }}" class="theme-form">
              @csrf
                <h4>وارد حساب کاربری شوید</h4>
                <div class="form-group" style="margin-top:25px;">
                  <label class="col-form-label">آدرس ایمیل</label>
                  <input class="form-control" name="email" type="email" placeholder="Test@gmail.com">
                </div>
                <div class="form-group">
                  <label class="col-form-label">پسورد</label>
                  <div class="form-input position-relative">
                    <input class="form-control" dir="LTR" name="password" type="password" placeholder="*********">
                    <div class="show-hide" ><span class="show"> </span></div>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="checkbox p-0">
                    <input id="checkbox1" type="checkbox">
                    <label class="text-muted" for="checkbox1">گذرواژه را به خاطر بسپارید</label>
                  </div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>
                    @endforeach
                   </div>
                    @endif
                  <div class="text-end mt-3" style="margin-top:25px;">
                    <button class="btn btn-primary btn-block w-100" type="submit" style="margin-top:10px;">ورود به سیستم</button>
                    <button id="otp-button" class="btn btn-primary btn-block w-100" type="button" style="margin-top:10px;">ورود به کد یکبار مصرف</button>
                  </div>
                </div>
              </form>

              <!-- فرم ورود با کد یکبار مصرف  -->
              <form id="otp-login" class="theme-form" style="display:none;">
                <h4>ورود با کد یکبار مصرف</h4>
                <div class="form-group" style="margin-top:25px;">
                  <label class="col-form-label">شماره تلفن</label>
                  <input class="form-control" type="text" placeholder="09xxxxxxxxx">
                </div>
                <div class="form-group mb-0">
                  <div class="text-end mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">ارسال کد</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- فایل‌های JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
