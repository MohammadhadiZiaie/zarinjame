

<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
      <div>
        <div class="logo-wrapper"><a href="">
            <img style="height:70px !important;" class="img-fluid for-light" src="{{ asset('images/logo/Minimal-logo.png') }}" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
          <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div  class="logo-icon-wrapper"><a href="">
            <img style="height:70px !important;" class="img-fluid" src="{{ asset('images/logo/Minimal-logo.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">         
                <li class="back-btn"><a href=""><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=" "></a>
              <div class="mobile-back text-end"><span>برگشت</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
             </li>
              <li class="pin-title sidebar-main-title">
                <div>
                  <h6>پین شده</h6>
                </div>
              </li>
              @php
    $menus = [
        'view_dashboard' => ['icon' => 'home', 'name' => 'پیشخوان'],
        'manage_orders' => [
            'icon' => 'shopping-bag', 'name' => 'مدیریت سفارش‌ها',
            'submenu' => ['ثبت سفارش جدید', 'لیست سفارشات']
        ],
        'manage_sewing' => [
            'icon' => 'box', 'name' => 'مدیریت تولید',
            'submenu' => ['ایجاد دستور تولید', 'لیست تولیدات']
        ],
        'manage_inventory' => [
            'icon' => 'inbox', 'name' => 'مدیریت انبار',
            'submenu' => ['انبار مواد اولیه', 'انبار محصولات نهایی']
        ],
        'tasks' => ['icon' => 'feather', 'name' => 'وظایف'],
        'production_process' => [
            'icon' => 'database', 'name' => 'فرآیند تولید',
            'submenu' => ['فرآیند برش', 'فرآیند دوخت', 'تکمیل فرآیند']
        ],
        'user_management' => [
            'icon' => 'users', 'name' => 'مدیریت کاربران',
            'submenu' => ['افزودن کاربر', 'لیست کاربران']
        ],
        'view_reports' => [
            'icon' => 'archive', 'name' => 'گزارش‌ها',
            'submenu' => ['گزارش‌ گیری تولید', 'گزارش‌ گیری سفارش‌ها', 'گزارش‌ گیری موجودی انبار']
        ],
        'settings' => [
            'icon' => 'settings', 'name' => 'تنظیمات',
            'submenu' => ['تنظیمات سیستم', 'تنظیمات دسترسی‌ها']
        ],
        'finance_management' => ['icon' => 'server', 'name' => 'مدیریت مالی'],
        'human_resources' => ['icon' => 'user', 'name' => 'مدیریت انسانی'],
    ];
@endphp

              <li class="sidebar-main-title" style="color:black !important">
              منو و دسترسی ها 
              </li>


              @foreach($menus as $permission => $menu)
        @if(auth()->user()->hasAccessToMenu($permission))
            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="{{ $menu['icon'] }}"></i>
                    <span>{{ $menu['name'] }}</span>
                </a>
                @if(!empty($menu['submenu']))
                    <ul class="sidebar-submenu">
                        @foreach($menu['submenu'] as $submenu)
                            <li><a href="#">{{ $submenu }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endif
    @endforeach
        
             

            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
      </div>
    </div>