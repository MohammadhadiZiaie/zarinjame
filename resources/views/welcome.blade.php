<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="سیستم کنترل تولید زرین جامه - صفحه به زودی">
    <meta name="keywords" content="مدیریت تولید، سیستم پوشاک، نرم‌افزار تولید، صفحه به زودی">
    <meta name="author" content="زرین جامه">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>به زودی - سیستم کنترل تولید زرین جامه</title>
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
    <style>
      html, body {
        font-family: Vazirmatn, sans-serif !important;
      }
    </style>
    <!-- فایل‌های CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
  </head>
  <body>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- صفحه اصلی -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- محتوای صفحه -->
      <div class="container-fluid p-0 m-0">
        <div class="comingsoon comingsoon-bgimg">
          <div class="comingsoon-inner text-center ">
            <img src="{{ asset('assets/images/logo/Zarinjame-logo-white.png') }}" alt="لوگو">
            <h5 class="whiteclr">ما به زودی در دسترس خواهیم بود ...!</h5>
            <div class="countdown " id="clock-arrival">
              <ul>
                <li><span class="days time"></span><span class="title whiteclr">روزها</span></li>
                <li><span class="hours time"></span><span class="title whiteclr">ساعت</span></li>
                <li><span class="minutes time"></span><span class="title whiteclr">دقیقه</span></li>
                <li><span class="seconds time"></span><span class="title whiteclr">ثانیه</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- فایل‌های JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
      var targetDate = new Date();
      targetDate.setDate(targetDate.getDate() + 3); // 

      function updateCountdown() {
        var now = new Date();
        var remainingTime = targetDate - now;

        var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
        var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

        document.querySelector('.days').textContent = days;
        document.querySelector('.hours').textContent = hours;
        document.querySelector('.minutes').textContent = minutes;
        document.querySelector('.seconds').textContent = seconds;

        
        if (remainingTime < 0) {
          clearInterval(countdownInterval);
          document.querySelector('#clock-arrival').innerHTML = "<h2>صفحه در دسترس است!</h2>";
        }
      }

    
      var countdownInterval = setInterval(updateCountdown, 1000);
    </script>
  </body>
</html>
