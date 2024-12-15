

<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
      <div>
        <div class="logo-wrapper"><a href="">
            <img style="height:70px !important;" class="img-fluid for-light" src="{{ asset('assets/images/logo/Minimal-logo.png') }}" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
          <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div  class="logo-icon-wrapper"><a href="">
            <img style="height:70px !important;" class="img-fluid" src="{{ asset('assets/images/logo/Minimal-logo.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">         
                <li class="back-btn"><a href=""><img class="img-fluid" src="/assets/images/logo/logo-icon.png" alt=" "></a>
              <div class="mobile-back text-end"><span>برگشت</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
             </li>
              <li class="pin-title sidebar-main-title">
                <div>
                  <h6>پین شده</h6>
                </div>
              </li>
    

              <li class="sidebar-main-title" style="color:black !important">
              منو و دسترسی ها 
              </li>
              

              <li class="sidebar-main-title">
              
              </li>
              <li class="sidebar-list">
                 <a class="sidebar-link sidebar-title" href="/dashboard">
               <i data-feather="home"></i>
               <span >پیشخوان </span></a>
              </li>
            
              
              @if(auth()->user()->hasAccessToMenu('view_orders'))

              <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="shopping-bag"></i><span >مدیریت سفارش‌ها</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="/orders/add">ثبت سفارش جدید </a></li>
                  <li><a href="quilleditor.html">لیست سفارشات </a></li>
                </ul>
              </li>
              @endif

              @if(auth()->user()->hasAccessToMenu('view_excute_prodaction'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="box"></i>
               <span >مدیریت تولید</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="quilleditor.html">ایجاد دستور تولید </a></li>
                  <li><a href="quilleditor.html">لیست تولیدات </a></li>
                </ul>
              </li>
             
              @endif

              @if(auth()->user()->hasAccessToMenu('view_storge'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="inbox"></i>
                              <span >مدیریت انبار</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="quilleditor.html">انبار مواد اولیه  </a></li>
                  <li><a href="quilleditor.html">انبار محصولات نهایی  </a></li>
                </ul>
              </li>
 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_task'))


              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">        
               <i data-feather="feather"></i>
                 <span >وظایف </span></a></span></a>
              </li>
 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_prodaction'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="database"></i>
                   <span >فرآیند تولید</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="quilleditor.html">فرآیند برش</a></li>
                  <li><a href="quilleditor.html">فرآیند دوخت</a></li>
                  <li><a href="quilleditor.html">تکمیل فرآیندآیند </a></li>

                </ul>
              </li>
 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_users'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="users"></i>
                              <span> مدیریت کاربران</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="/users/create">افزودن کاربر </a></li>
                  <li><a href="/users/list">لیست کاربران</a></li>
                </ul>
              </li> 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_users'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="users"></i>
                              <span> مدیریت مشتریان</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="/customers/create">افزودن مشتری </a></li>
                  <li><a href="/customers/list">لیست مشتریان</a></li>
                  <li><a href="">تنظیم قرداد مشتری</a></li>
                </ul>
              </li> 
              @endif


              @if(auth()->user()->hasAccessToMenu('view_report'))


              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">
               <i data-feather="archive"></i>
                 <span>گزارش‌ها</span></a>
                  <ul class="sidebar-submenu">
                  <li><a href="quilleditor.html">گزارش‌ گیری تولید</a></li>
                  <li><a href="quilleditor.html">گزارش‌ گیری سفارش‌ها</a></li>
                  <li><a href="quilleditor.html">گزارش‌ گیری موجودی انبار
                  </a></li>
                </ul>
              </li>
 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_setting'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">        
                 <i data-feather="settings"></i>
                  <span >تنظیمات </span></a></span></a>
                  <ul class="sidebar-submenu">
                <li><a href="/setting/access">تنظیمات دسترسی‌ها</a>   </li>
                </ul>
              </li> 
 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_funancial'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">        
               <i data-feather="server"></i>
                  <span >مدیریت مالی </span></a></span></a>
              </li>
 
              @endif

              @if(auth()->user()->hasAccessToMenu('view_human_resource'))

              <li class="sidebar-list">
               <a class="sidebar-link sidebar-title" href="#">        
               <i data-feather="user"></i>
                  <span >مدیریت انسانی </span></a></span></a>
              </li>
              @endif



        
             

            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
      </div>
    </div>