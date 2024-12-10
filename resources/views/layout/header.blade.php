<div class="page-header">
    <div class="header-wrapper row m-0">
      <form class="form-inline search-full col" action="#" method="get">
        <div class="form-group w-100">
          <div class="Typeahead Typeahead--twitterUsers">
            <div class="u-posRelative">
              <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="جستجو .." name="q" title="" autofocus>
              <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">در حال بارگزاری...</span></div><i class="close-search" data-feather="x"></i>
            </div>
            <div class="Typeahead-menu"></div>
          </div>
        </div>
      </form>
      <div class="header-logo-wrapper col-auto p-0">
        <div class="logo-wrapper"><a href="dashboard-01.html"><img class="img-fluid" src="{{ asset('images/logo/Zarinjame-logo-black.png') }}" alt="Logo"></a></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
      </div>
      <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
        <div class="notification-slider">
          <div class="d-flex h-100"> <img src="{{ asset('gif/giftools.gif') }}" alt="gif">
            <h6 class="mb-0 f-w-400"><span class="font-primary">
            زرین جامه </span><span class="f-light">کیفیت در تولید، دقت در مدیریت</span></h6>
          </div>
         
        </div>
      </div>
      <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
        <ul class="nav-menus">
         
       <li>
            <div class="mode">
              <svg>
                <use href="{{ asset('assets/svg/icon-sprite.svg#moon') }}"></use>
              </svg>
            </div>
          </li>
         
          <li class="onhover-dropdown">
            <div class="notification-box">
              <svg>
                <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
              </svg><span class="badge rounded-pill badge-secondary">4 </span>
            </div>
            <div class="onhover-show-div notification-dropdown">
              <h6 class="f-18 mb-0 dropdown-title">اعلان‌ها </h6>
              <ul>
                <li class="b-l-primary border-4">
                  <p>پردازش تحویل <span class="font-danger">10 دقیقه.</span></p>
                </li>
                <li class="b-l-success border-4">
                  <p>سفارش کامل شد<span class="font-success">1 ساعت</span></p>
                </li>
                <li class="b-l-secondary border-4">
                  <p>بلیت‌های تولید شده<span class="font-secondary">3 ساعت</span></p>
                </li>
                <li class="b-l-warning border-4">
                  <p>تحویل کامل<span class="font-warning">6 ساعت</span></p>
                </li>
                <li><a class="f-w-700" href="#">بررسی همه</a></li>
              </ul>
            </div>
          </li>
          <li class="profile-nav onhover-dropdown pe-0 py-0">
            <div class="media profile-media"><img style="height:50px" class="b-r-10" src="{{ asset('assets/icon/man.png') }}" alt="">
              <div class="media-body"><span>{{ Auth::user()->name }}</span>
                <p class="mb-0">{{ Auth::user()->role }} <i class="middle fa fa-angle-down"></i></p>
              </div>
            </div>
            <ul class="profile-dropdown onhover-show-div">
              <li><a href="user-profile.html"><i data-feather="user"></i><span>حساب </span></a></li>
              <li><a href="letter-box.html"><i data-feather="mail"></i><span>صندوق ورودی</span></a></li>
              <li><a href="kanban.html"><i data-feather="file-text"></i><span>بورد کارها</span></a></li>
              <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i data-feather="log-in"></i><span>خروج</span>
            </a>
        </li>              </ul>
          </li>
        </ul>
      </div>
    </div>
</div>
