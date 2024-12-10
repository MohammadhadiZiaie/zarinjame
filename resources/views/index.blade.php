@extends('layout.master')

@section('titlePage')

<title>پنل مدیریت زرین جامه | مدیریت فرآیند تولید پوشاک</title>

@endsection

@section('DashboardIndex')

<div class="page-body">
      <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-6" style="margin-top:25px">
              <h4>          {{ session('message') }}

              </h4>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="row widget-grid">
          <div class="col-xxl-4 col-sm-6 box-col-6">
            <div class="card profile-box">
              <div class="card-body">
                <div class="media media-wrapper justify-content-between">
                  <div class="media-body">
                    <div class="greeting-user">
                      <h4 class="f-w-600">زرین جامه</h4>
                      <p>پنل مدیریتی، و گزارش دهی  تولیدی پوشاک  </p>
                      <div class="whatsnew-btn"><a class="btn btn-outline-white">گزارشات انبار موجودی</a></div>
                    </div>
                  </div>
                  <div>
                    <div class="clockbox">
                      <svg id="clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                        <g id="face">
                          <circle class="circle" cx="300" cy="300" r="253.9"></circle>
                          <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"></path>
                          <circle class="mid-circle" cx="300" cy="300" r="16.2"></circle>
                        </g>
                        <g id="hour">
                          <path class="hour-hand" d="M300.5 298V142"></path>
                          <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                        </g>
                        <g id="minute">
                          <path class="minute-hand" d="M300.5 298V67">   </path>
                          <circle class="sizing-box" cx="300" cy="300" r="253.9"></circle>
                        </g>
                        <g id="second">
                          <path class="second-hand" d="M300.5 350V55"></path>
                          <circle class="sizing-box" cx="300" cy="300" r="253.9">   </circle>
                        </g>
                      </svg>
                    </div>
                    <div class="badge f-10 p-0" id="txt"></div>
                  </div>
                </div>
                <div class="cartoon"><img class="img-dashboardd" src="{{ asset('images/exampleprodaction.png') }}" alt="vector women with leptop"></div>
              </div>
            </div>
          </div>
          <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card widget-1">
                  <div class="card-body">
                    <div class="widget-content">
                      <div class="widget-round secondary">
                        <div class="bg-round">
                          <svg class="svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#cart"> </use>
                          </svg>
                          <svg class="half-circle svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#halfcircle"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h4>10,000</h4><span class="f-light">خرید</span>
                      </div>
                    </div>
                    <div class="font-secondary f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+50%</span></div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round primary">
                          <div class="bg-round">
                            <svg class="svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#tag"> </use>
                            </svg>
                            <svg class="half-circle svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4>4,200</h4><span class="f-light">فروش</span>
                        </div>
                      </div>
                      <div class="font-primary f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+70%</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-auto col-xl-3 col-sm-6 box-col-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card widget-1">
                  <div class="card-body">
                    <div class="widget-content">
                      <div class="widget-round warning">
                        <div class="bg-round">
                          <svg class="svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#return-box"> </use>
                          </svg>
                          <svg class="half-circle svg-fill">
                            <use href="../assets/svg/icon-sprite.svg#halfcircle"></use>
                          </svg>
                        </div>
                      </div>
                      <div>
                        <h4>7000</h4><span class="f-light">بازده فروش</span>
                      </div>
                    </div>
                    <div class="font-warning f-w-500"><i class="icon-arrow-down icon-rotate me-1"></i><span>-20%</span></div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card widget-1">
                    <div class="card-body">
                      <div class="widget-content">
                        <div class="widget-round success">
                          <div class="bg-round">
                            <svg class="svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#rate"> </use>
                            </svg>
                            <svg class="half-circle svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#halfcircle"></use>
                            </svg>
                          </div>
                        </div>
                        <div>
                          <h4>5700</h4><span class="f-light">نرخ خرید</span>
                        </div>
                      </div>
                      <div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>+70%</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-auto col-xl-12 col-sm-6 box-col-6">
            <div class="row">
              <div class="col-xxl-12 col-xl-6 box-col-12">
                <div class="card widget-1 widget-with-chart">
                  <div class="card-body">
                    <div>
                      <h4 class="mb-1">1,80k</h4><span class="f-light">سفارشات</span>
                    </div>
                    <div class="order-chart">
                      <div id="orderchart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-12 col-xl-6 box-col-12">
                <div class="card widget-1 widget-with-chart">
                  <div class="card-body">
                    <div>
                      <h4 class="mb-1">6,90k</h4><span class="f-light"> سود</span>
                    </div>
                    <div class="profit-chart">
                      <div id="profitchart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-8 col-lg-12 box-col-12">
            <div class="card">
              <div class="card-header card-no-border">
                <h5>تعادل کلی</h5>
              </div>
              <div class="card-body pt-0">
                <div class="row m-0 overall-card">
                  <div class="col-xl-9 col-md-12 col-sm-7 p-0">
                    <div class="chart-right">
                      <div class="row">
                        <div class="col-xl-12">
                          <div class="card-body p-0">
                            <ul class="balance-data">
                              <li><span class="circle bg-warning"> </span><span class="f-light ms-1">کسب درآمد</span></li>
                              <li><span class="circle bg-primary"> </span><span class="f-light ms-1">هزینه</span></li>
                            </ul>
                            <div class="current-sale-container">
                              <div id="chart-currently"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-12 col-sm-5 p-0">
                    <div class="row g-sm-4 g-2">
                      <div class="col-xl-12 col-md-4">
                        <div class="light-card balance-card widget-hover">
                          <div class="svg-box">
                            <svg class="svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#income"></use>
                            </svg>
                          </div>
                          <div> <span class="f-light">درآمد</span>
                            <h6 class="mt-1 mb-0">$22,678</h6>
                          </div>
                          <div class="ms-auto text-end">
                            <div class="dropdown icon-dropdown">
                              <button class="btn dropdown-toggle" id="incomedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown"><a class="dropdown-item" href="#">امروز</a><a class="dropdown-item" href="#">فردا</a><a class="dropdown-item" href="#">Yesterday </a></div>
                            </div><span class="font-success">+$456</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 col-md-4">
                        <div class="light-card balance-card widget-hover">
                          <div class="svg-box">
                            <svg class="svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#expense"></use>
                            </svg>
                          </div>
                          <div> <span class="f-light">هزینه</span>
                            <h6 class="mt-1 mb-0">$12,057</h6>
                          </div>
                          <div class="ms-auto text-end">
                            <div class="dropdown icon-dropdown">
                              <button class="btn dropdown-toggle" id="expensedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="expensedropdown"><a class="dropdown-item" href="#">امروز</a><a class="dropdown-item" href="#">فردا</a><a class="dropdown-item" href="#">Yesterday </a></div>
                            </div><span class="font-danger">+$256</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-12 col-md-4">
                        <div class="light-card balance-card widget-hover">
                          <div class="svg-box">
                            <svg class="svg-fill">
                              <use href="../assets/svg/icon-sprite.svg#doller-return"></use>
                            </svg>
                          </div>
                          <div> <span class="f-light">بازگشت نقدی</span>
                            <h6 class="mt-1 mb-0">8,475</h6>
                          </div>
                          <div class="ms-auto text-end">
                            <div class="dropdown icon-dropdown">
                              <button class="btn dropdown-toggle" id="cashbackdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cashbackdropdown"><a class="dropdown-item" href="#">امروز</a><a class="dropdown-item" href="#">فردا</a><a class="dropdown-item" href="#">Yesterday </a></div>
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
          <div class="col-xxl-4 col-xl-7 col-md-6 col-sm-5 box-col-6">
            <div class="card height-equal">
              <div class="card-header card-no-border">
                <div class="header-top">
                  <h5>سفارشات اخیر</h5>
                  <div class="card-header-right-icon">
                    <div class="dropdown icon-dropdown">
                      <button class="btn dropdown-toggle" id="recentdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentdropdown"><a class="dropdown-item" href="#">هفتگی</a><a class="dropdown-item" href="#">ماهانه</a><a class="dropdown-item" href="#">سالانه</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <div class="row recent-wrapper">
                  <div class="col-xl-6">
                    <div class="recent-chart">
                      <div id="recentchart"></div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <ul class="order-content">
                      <li> <span class="recent-circle bg-primary"> </span>
                        <div> <span class="f-light f-w-500">لغو شد</span>
                          <h4 class="mt-1 mb-0">2,302<span class="f-light f-14 f-w-400 ms-1">(6 ماه گذشته) </span></h4>
                        </div>
                      </li>
                      <li> <span class="recent-circle bg-info"></span>
                        <div> <span class="f-light f-w-500">تحویل داده شده</span>
                          <h4 class="mt-1 mb-0">9,302<span class="f-light f-14 f-w-400 ms-1">(6 ماه گذشته) </span></h4>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-5 col-md-6 col-sm-7 notification box-col-6">
            <div class="card height-equal">
              <div class="card-header card-no-border">
                <div class="header-top">
                  <h5 class="m-0">فعالیت</h5>
                  <div class="card-header-right-icon">
                    <div class="dropdown">
                      <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">امروز</button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">امروز</a><a class="dropdown-item" href="#">فردا</a><a class="dropdown-item" href="#">Yesterday  </a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <ul>
                  <li class="d-flex">
                    <div class="activity-dot-primary"></div>
                    <div class="w-100 ms-3">
                      <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">24 شهریور 1402 </span><span>1 روز پیش</span></p>
                      <h6>محصول به روز شده<span class="dot-notification"></span></h6>
                      <p class="f-light">هر یک از نتایج باید عالی باشد...</p>
                    </div>
                  </li>
                  <li class="d-flex">
                    <div class="activity-dot-warning"></div>
                    <div class="w-100 ms-3">
                      <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">24 شهریور 1402  </span><span>امروز</span></p>
                      <h6>درست مثل محصول خود بگویید<span class="dot-notification"></span></h6>
                      <p> هر یک از نتایج باید عالی باشد... </p>
                    </div>
                  </li>
                  <li class="d-flex">
                    <div class="activity-dot-secondary"></div>
                    <div class="w-100 ms-3">
                      <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">10 فرورین 1403 </span><span>12:00 PM</span></p>
                      <h6>درست مثل محصول خود بگویید<span class="dot-notification"></span></h6>
                      <p> هر یک از نتایج باید عالی باشد... </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xxl-4 col-md-6 appointment-sec box-col-6">
            <div class="appointment">
              <div class="card">
                <div class="card-header card-no-border">
                  <div class="header-top">
                    <h5 class="m-0">فروش اخیر</h5>
                    <div class="card-header-right-icon">
                      <div class="dropdown">
                        <button class="btn dropdown-toggle" id="recentButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">امروز</button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentButton"><a class="dropdown-item" href="#">امروز</a><a class="dropdown-item" href="#">فردا</a><a class="dropdown-item" href="#">امروز</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="appointment-table table-responsive">
                    <table class="table table-bordernone">
                      <tbody>
                      <tr>
                        <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/dashboard/user/1.jpg" alt="user"></td>
                        <td class="img-content-box"><a class="d-block f-w-500" href="user-profile.html">محمد نوری</a><span class="f-light">10 دقیقه پیش</span></td>
                        <td class="text-end">
                          <p class="m-0 font-success">$200.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/dashboard/user/2.jpg" alt="user"></td>
                        <td class="img-content-box"><a class="d-block f-w-500" href="user-profile.html">داوود عبدی</a><span class="f-light">19 دقیقه پیش</span></td>
                        <td class="text-end">
                          <p class="m-0 font-success">$970.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/dashboard/user/3.jpg" alt="user"></td>
                        <td class="img-content-box"><a class="d-block f-w-500" href="user-profile.html">ستار عبدی</a><span class="f-light">2 ساعت پیش</span></td>
                        <td class="text-end">
                          <p class="m-0 font-success">$300.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/dashboard/user/4.jpg" alt="user"></td>
                        <td class="img-content-box"><a class="d-block f-w-500" href="user-profile.html">کامران ندری</a><span class="f-light">8 ساعت پیش</span></td>
                        <td class="text-end">
                          <p class="m-0 font-success">$450.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/dashboard/user/5.jpg" alt="user"></td>
                        <td class="img-content-box"><a class="d-block f-w-500" href="user-profile.html">فرهاد مجیدی</a><span class="f-light">1 روز پیش</span></td>
                        <td class="text-end">
                          <p class="m-0 font-success">$768.00</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="col-xxl-4 col-md-6 box-col-6 col-ed-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h5>مجموع کاربران</h5>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">هفتگی</a><a class="dropdown-item" href="#">ماهانه</a><a class="dropdown-item" href="#">سالانه</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <ul class="user-list">
                      <li>
                        <div class="user-icon primary">
                          <div class="user-box"><i class="font-primary" data-feather="user-plus"></i></div>
                        </div>
                        <div>
                          <h5 class="mb-1">178,098</h5><span class="font-primary d-flex align-items-center"><i class="icon-arrow-up icon-rotate me-1"> </i><span class="f-w-500">+30.89</span></span>
                        </div>
                      </li>
                      <li>
                        <div class="user-icon success">
                          <div class="user-box"><i class="font-success" data-feather="user-minus"></i></div>
                        </div>
                        <div>
                          <h5 class="mb-1">178,098</h5><span class="font-danger d-flex align-items-center"><i class="icon-arrow-down icon-rotate me-1"></i><span class="f-w-500">-08.89</span></span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="col-xxl-5 col-lg-8 col-md-11 box-col-8 col-ed-6">
            
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
</div>






@endsection