<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="سیستم مدیریت و کنترل فرآیند تولید پوشاک زرین جامه، ابزار پیشرفته برای مدیریت فرآیندهای تولید، انبار و گزارش‌گیری.">
  <meta name="keywords" content="سیستم مدیریت تولید، مدیریت فرآیند پوشاک، پنل مدیریت، زرین جامه، گزارش‌گیری، تولید پوشاک">
  <meta name="author" content="زرین جامه">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@500&display=swap" rel="stylesheet">

  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  @yield('titlePage')
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" type="text/css" />
  <style>
      html, body {
          font-family: Vazirmatn, sans-serif !important;
      }
  </style>
  <!-- CSS فایل‌ها -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

  @yield('customCSS')
</head>
<body onload="startTime()">
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="loader-index"> <span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('layout.header')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      @include('layout.sidebar')

      <!-- Page Sidebar Ends-->
      @yield('DashboardIndex')
      @yield('access')
      @yield('adduser')
      @yield('listuser')
      @yield('addorder')
      @yield('addcustomer')
      @yield('content')
      @yield('listcustomer')

      <!-- footer start-->
      @include('layout.footer')
    </div>
  </div>
  <!-- latest jquery-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/config.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<!-- Plugins JS start-->

<!-- Plugins JS Ends-->

  <!-- Theme js-->
  @yield('customJs')

  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script>new WOW().init();</script>
</body>
</html>
