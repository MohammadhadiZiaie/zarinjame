<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="سیستم مدیریت و کنترل فرآیند تولید پوشاک زرین جامه، ابزار پیشرفته برای مدیریت فرآیندهای تولید، انبار و گزارش‌گیری.">
  <meta name="keywords" content="سیستم مدیریت تولید، مدیریت فرآیند پوشاک، پنل مدیریت، زرین جامه، گزارش‌گیری، تولید پوشاک">
  <meta name="author" content="زرین جامه">
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
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
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
      <!-- footer start-->
      @include('layout.footer')
    </div>
  </div>
  <!-- latest jquery-->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap js-->
  <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <!-- feather icon js-->
  <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
  <!-- scrollbar js-->
  <script src="{{ asset('js/scrollbar/simplebar.js') }}"></script>
  <script src="{{ asset('js/scrollbar/custom.js') }}"></script>
  <!-- Sidebar jquery-->
  <script src="{{ asset('js/config.js') }}"></script>
  <!-- Plugins JS start-->
  <script src="{{ asset('js/sidebar-menu.js') }}"></script>
  <script src="{{ asset('js/sidebar-pin.js') }}"></script>
  <script src="{{ asset('js/clock.js') }}"></script>
  <script src="{{ asset('js/slick/slick.min.js') }}"></script>
  <script src="{{ asset('js/slick/slick.js') }}"></script>
  <script src="{{ asset('js/header-slick.js') }}"></script>
  <script src="{{ asset('js/chart/apex-chart/apex-chart.js') }}"></script>
  <script src="{{ asset('js/chart/apex-chart/stock-prices.js') }}"></script>
  <script src="{{ asset('js/chart/apex-chart/moment.min.js') }}"></script>
  <script src="{{ asset('js/notify/bootstrap-notify.min.js') }}"></script>
  <script src="{{ asset('js/dashboard/default.js') }}"></script>
  <script src="{{ asset('js/notify/index.js') }}"></script>
  <script src="{{ asset('js/typeahead/handlebars.js') }}"></script>
  <script src="{{ asset('js/typeahead/typeahead.bundle.js') }}"></script>
  <script src="{{ asset('js/typeahead/typeahead.custom.js') }}"></script>
  <script src="{{ asset('js/typeahead-search/handlebars.js') }}"></script>
  <script src="{{ asset('js/typeahead-search/typeahead-custom.js') }}"></script>
  <script src="{{ asset('js/height-equal.js') }}"></script>
  <script src="{{ asset('js/animation/wow/wow.min.js') }}"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="{{ asset('js/script.js') }}"></script>
  <script>new WOW().init();</script>
</body>
</html>
