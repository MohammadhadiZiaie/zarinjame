@extends('layout.master')

@section('titlePage')

<title>پنل مدیریت زرین جامه | افزودن سفارش جدید </title>

@endsection

@section('customCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/intltelinput.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/tagify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/dropzone.css') }}">


@endsection

@section('addorder')



<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6" style="margin-top:25px;">
                </div>
                
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-12"> 
                <div class="card"> 
                  <div class="card-header">
                    <h5>فرم ثبت سفارش</h5>
                  </div>
                  <div class="card-body">
                    <div class="row g-xl-5 g-3">
                      <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                        <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                          <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                  <h6>جزئیات محصول را اضافه کنید</h6>
                                  <p>نام و جزئیات محصول را اضافه کنید</p>
                              </div></a></li>
                          
                          <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#product-category"></use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                  <h6>دسته های محصول</h6>
                                  <p>دسته، وضعیت و برچسب محصول را اضافه کنید</p>
                              </div></a></li>
                          <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#pricing"> </use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                  <h6>قیمت های فروش</h6>
                                  <p>قیمت و تخفیف پایه محصول را اضافه کنید</p>
                              </div></a></li>
                          <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-product" role="tab" aria-controls="advance-product" aria-selected="false">
                              <div class="nav-rounded">
                                <div class="product-icons">
                                  <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#advance"> </use>
                                  </svg>
                                </div>
                              </div>
                              <div class="product-tab-content">
                                  <h6>پیشرفت</h6>
                                  <p>جزئیات متا و جزئیات موجودی را اضافه کنید</p>
                              </div></a></li>
                        </ul>
                      </div>
                      <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                        <div class="tab-content" id="add-product-pills-tabContent">
                          <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                            <div class="sidebar-body">
                                <form class="row g-2">
                                    <label class="form-label col-12 m-0" for="productTitle1">عنوان محصول <span class="txt-danger"> *</span></label>
                                    <div class="col-12 custom-input">
                                        <input class="form-control is-invalid" id="productTitle1" type="text" require="">
                                        <div class="valid-feedback">به نظر خوب است!</div>
                                        <div class="invalid-feedback">نام محصول مورد نیاز است و توصیه می‌شود که منحصر به فرد باشد.</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="toolbar-box">
                                            <div id="toolbar2"><span class="ql-formats">
                                         <select class="ql-size"></select></span><span class="ql-formats">
                                         <button class="ql-bold">پررنگ </button>
                                         <button class="ql-italic">Italic </button>
                                         <button class="ql-underline">زیر خط</button>
                                         <button class="ql-strike">ضربه </button></span><span class="ql-formats">
                                         <button class="ql-list" value="ordered">فهرست </button>
                                         <button class="ql-list" value="bullet"> </button>
                                         <button class="ql-indent" value="-1"> </button>
                                         <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                         <button class="ql-link"></button>
                                         <button class="ql-image"></button>
                                         <button class="ql-video"></button></span></div>
                                            <div id="editor2"></div>
                                        </div>
                                        <p class="f-light">با افزودن یک توضیح قانع کننده، دید محصول را بهبود بخشید.</p>
                                    </div>
                                </form>
                              <div class="product-buttons">
                                <div class="btn">
                                  <div class="d-flex align-items-center gap-sm-2 gap-1">بعدی
                                    <svg>
                                      <use href="../assets/svg/icon-sprite.svg#front-arrow">  </use>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                            <div class="sidebar-body">
                              <form>
                                <div class="row g-lg-4 g-3">
                                  <div class="col-12">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="row g-2">
                                                <div class="col-12">
                                                    <label class="form-label m-0" for="validationDefault04">افزودن دسته</label>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select" id="validationDefault04" require="">
                                                        <option selected="" value="">اسباب بازی و بازی</option>
                                                        <option>لباس ورزشی </option>
                                                        <option>جواهرات </option>
                                                        <option>مبلمان و دکور</option>
                                                        <option>سلامت، مراقبت شخصی، و زیبایی</option>
                                                        <option>خودکار و قطعات </option>
                                                        <option>محصولات مراقبت از کودک</option>
                                                    </select>
                                                    <p class="f-light">یک محصول را می توان به یک دسته اضافه کرد</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row g-2 product-tag">
                                                <div class="col-12">
                                                    <label class="form-label d-block m-0">افزودن برچسب</label>
                                                </div>
                                                <div class="col-12">
                                                    <input name="basic-tags" value="watch, sports, clothes, bottles">
                                                    <p class="f-light">محصولات را می توان برچسب گذاری کرد</p>
                                                </div>
                                            </div>
                                        </div>
                                      <div class="col-12">
                                        <div class="category-buton"><a class="btn button-primary" href="#!" data-bs-toggle="modal" data-bs-target="#category-pill-modal"><i class="me-2 fa fa-plus"> </i>ایجاد دسته جدید</a></div>
                                        <div class="modal fade" id="category-pill-modal" tabindex="-1" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h3 class="modal-title fs-5">دسته بندی جدید ایجاد کنید</h3>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body custom-input">
                                                <div class="create-category">
                                                  <div>
                                                    <label class="form-label" for="categoryName">نام دسته <span class="txt-danger"> *</span></label>
                                                    <input class="form-control m-0" id="categoryName" type="text" required="">
                                                    <div class="toolbar-box">
                                                      <div id="toolbar3"><span class="ql-formats">
                                                          <select class="ql-size"></select></span><span class="ql-formats">
                                                          <button class="ql-bold">Bold </button>
                                                          <button class="ql-italic">Italic </button>
                                                          <button class="ql-underline">underline</button>
                                                          <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                          <button class="ql-list" value="ordered">List </button>
                                                          <button class="ql-list" value="bullet"> </button>
                                                          <button class="ql-indent" value="-1"> </button>
                                                          <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                          <button class="ql-link"></button>
                                                          <button class="ql-image"></button>
                                                          <button class="ql-video"></button></span></div>
                                                      <div id="editor3"></div>
                                                    </div>
                                                  </div>
                                                  <p class="f-light">Improve product visibility by adding a compelling description.</p>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">لغو</button>
                                                <button class="btn btn-primary" type="button">افزودن</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12"> 
                                    <div class="row g-3">
                                      <div class="col-sm-6">
                                        <div class="row">
                                          <div class="col-12">
                                            <label class="form-label" for="publishStatus">وضعیت انتشار</label>
                                              <select class="form-select" id="publishStatus" require="">
                                                  <option selected="" value="">انتشار</option>
                                                  <option>پیش نویس ها</option>
                                                  <option>لغو انتشار</option>
                                              </select>
                                            <p class="f-light">وضعیت را انتخاب کنید</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="row">
                                          <div class="col-12">
                                            <label class="form-label" for="datetime-local1">تاریخ و زمان انتشار</label>
                                            <div class="input-group flatpicker-calender product-date">
                                              <input class="form-control" id="datetime-local1" type="date">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-buttons">
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                      </svg>قبلی
                                    </div>
                                  </div>
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">بعدی
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                            <div class="sidebar-body">
                              <form class="price-wrapper">
                                  <div class="row g-3 custom-input">
                                      <div class="col-sm-6">
                                          <label class="form-label" for="initialCost">هزینه اولیه <span class="txt-danger">*</span></label>
                                          <input class="form-control" id="initialCost" type="number">
                                      </div>
                                      <div class="col-sm-6">
                                          <label class="form-label" for="sellingPrice">قیمت فروش <span class="txt-danger">*</span></label>
                                          <input class="form-control" id="sellingPrice" type="number">
                                      </div>
                                      <div class="col-sm-6">
                                          <label class="form-label">پول خود را انتخاب کنید</label>
                                          <select class="form-select" aria-label="مثال انتخاب پیش فرض">
                                              <option selected="">دلار $</option>
                                              <option value="1">یورو €</option>
                                              <option value="2">روپیه ₹</option>
                                              <option value="3">پوند بریتانیا</option>
                                              <option value="4">روبل روسیه ₽</option>
                                              <option value="5">ین ژاپن ¥</option>
                                              <option value="6">دلار سنگاپور S$</option>
                                          </select>
                                      </div>
                                      <div class="col-sm-6">
                                          <label class="form-label" for="productStock1">ذخایر محصول<span class="txt-danger">*</span></label>
                                          <input class="form-control" id="productStock1" type="number">
                                      </div>
                                      <div class="col-12">
                                          <label class="form-label">انواع تخفیف محصول<i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs- title="نوع تخفیفی را انتخاب کنید که روی آن کالای خاص استفاده شود."></i></label>
                                          <ul class="radio-wrapper">
                                              <li>
                                                  <input class="form-check-input" id="radio-icon" type="radio" name="radio5" value="option5">
                                                  <label class="form-check-label" for="radio-icon"><span>قیمت ثابت</span></label>
                                              </li>
                                              <li>
                                                  <input class="form-check-input" id="radio-icon4" type="radio" name="radio5" value="option5" checked="">
                                                  <label class="form-check-label" for="radio-icon4"><span>BOGO(یکی بخر، یکی بگیر)</span></label>
                                              </li>
                                              <li>
                                                  <input class="form-check-input" id="radio-icon5" type="radio" name="radio5" value="option5">
                                                  <label class="form-check-label" for="radio-icon5"><span>تخفیف فصلی یا تعطیلات</span></label>
                                              </li>
                                              <li>
                                                  <input class="form-check-input" id="radio-icon6" type="radio" name="radio5" value="option5">
                                                  <label class="form-check-label" for="radio-icon6"><span>تخفیف بر اساس درصد(%)</span></label>
                                              </li>
                                              <li>
                                                  <input class="form-check-input" id="radio-icon7" type="radio" name="radio5" value="option5">
                                                  <label class="form-check-label" for="radio-icon7"><span>تخفیف حجمی یا عمده</span></label>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                <div class="product-buttons">
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                      </svg>قبلی
                                    </div>
                                  </div>
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">بعدی
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#front-arrow">   </use>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="advance-product" role="tabpanel" aria-labelledby="advance-product-tab">
                            <div class="sidebar-body advance-options">
                              <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="manifest-option-tab" data-bs-toggle="tab" href="#manifest-option" role="tab" aria-controls="manifest-option" aria-selected="true">فهرست</a></li>
                                <li class="nav-item"><a class="nav-link" id="additional-option-tab" data-bs-toggle="tab" href="#additional-option" role="tab" aria-controls="additional-option" aria-selected="false">گزینه های اضافی</a></li>
                                <li class="nav-item"><a class="nav-link" id="dropping-option-tab" data-bs-toggle="tab" href="#dropping-option" role="tab" aria-controls="dropping-option" aria-selected="false">حمل و نقل</a></li>
                              </ul>
                              <div class="tab-content" id="advance-option-tabContent">
                                <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                                  <div class="meta-body">
                                      <form id="advance-tab">
                                          <div class="row g-3 custom-input">
                                              <div class="col-sm-6">
                                                  <label class="form-label">در دسترس بودن سهام</label>
                                                  <select class="form-select" aria-label="مثال انتخاب پیش فرض">
                                                      <option selected="">موجود در انبار</option>
                                                      <option value="1">در انبار موجود نیست</option>
                                                      <option value="2">پیش سفارش</option>
                                                  </select>
                                              </div>
                                              <div class="col-sm-6">
                                                  <label class="form-label">کم موجودی</label>
                                                  <select class="form-select" aria-label="مثال انتخاب پیش فرض">
                                                      <option selected="">کم انبار (5 یا کمتر)</option>
                                                      <option value="1"> موجودی کم (10 یا کمتر)</option>
                                                      <option value="2"> موجودی کم (20 یا کمتر)</option>
                                                      <option value="2"> موجودی کم (25 یا کمتر)</option>
                                                      <option value="2"> موجودی کم (30 یا کمتر)</option>
                                                  </select>
                                              </div>
                                              <div class="col-lg-3 col-sm-6">
                                                  <label class="form-label" for="exampleFormControlInput1">SKU <span class="txt-danger">*</span></label>
                                                  <input class="form-control" id="exampleFormControlInput1" type="text">
                                              </div>
                                              <div class="col-lg-3 col-sm-6">
                                                  <label class="form-label" for="exampleFormControlInputa">مقدار موجودی <span class="txt-danger">*</span></label>
                                                  <input class="form-control" id="exampleFormControlInputa" type="number" value="7" min="0">
                                              </div>
                                              <div class="col-lg-3 col-sm-6">
                                                  <label class="form-label" for="exampleFormControlInputb">تاریخ ذخیره مجدد <span class="txt-danger">*</span></label>
                                                  <input class="form-control" id="exampleFormControlInputb" type="number">
                                              </div>
                                              <div class="col-lg-3 col-sm-6">
                                                  <label class="form-label" for="exampleFormControlInputc">پیش سفارش <span class="txt-danger">*</span></label>
                                                  <input class="form-control" id="exampleFormControlInputc" type="number">
                                              </div>
                                              <div class="col-12">
                                                  <label class="form-label">اجازه دادن به سفارشات پشتیبان</label>
                                                  <div class="form-check">
                                                      <input class="form-check-input" id="gridCheck" type="checkbox">
                                                      <label class="form-check-label m-0" for="gridCheck">این یک محصول دیجیتال است</label>
                                                      <p class="f-light">تصمیم بگیرید که محصول دیجیتالی است یا فیزیکی. حمل و نقل ممکن است برای اقلام واقعی ضروری باشد.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="product-buttons">
                                              <div class="btn">
                                                  <div class="d-flex align-items-center gap-sm-2 gap-1">
                                                      <svg>
                                                          <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                                      </svg>قبلی
                                                  </div>
                                              </div>
                                              <div class="btn">
                                                  <div class="d-flex align-items-center gap-sm-2 gap-1">بعدی
                                                      <svg>
                                                          <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                                      </svg>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="additional-option" role="tabpanel" aria-labelledby="additional-option-tab">
                                  <div class="meta-body">
                                    <form>
                                      <div class="row g-3"> 
                                        <div class="col-12"> 
                                          <div class="row g-3">
                                              <div class="col-sm-6">
                                                  <div class="row custom-input">
                                                      <div class="col-12">
                                                          <label class="form-label" for="tagTitle">عنوان برچسب اضافی</label>
                                                      </div>
                                                      <div class="col-12">
                                                          <input class="form-control" id="tagTitle" type="text">
                                                          <p class="f-light">یک عنوان برچسب جدید اضافه کنید. کلمات کلیدی باید ساده و دقیق باشند.</p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-sm-6">
                                                  <div class="row product-tag">
                                                      <label class="form-label col-12">برچسب های خاص</label>
                                                      <div class="col-12">
                                                          <input id="specificTag" name="basic-tags1" value="watch, sports, clothes, bottles">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          <label class="form-label col-12">توضیحات اضافی</label>
                                                          <div class="toolbar-box">
                                                              <div id="toolbar4"><span class="ql-formats">
                                                         <select class="ql-size"></select></span><span class="ql-formats">
                                                         <button class="ql-bold">پررنگ </button>
                                                         <button class="ql-italic">Italic </button>
                                                         <button class="ql-underline">زیر خط</button>
                                                         <button class="ql-strike">ضربه </button></span><span class="ql-formats">
                                                         <button class="ql-list" value="ordered">فهرست </button>
                                                         <button class="ql-list" value="bullet"> </button>
                                                         <button class="ql-indent" value="-1"> </button>
                                                         <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                         <button class="ql-link"></button>
                                                         <button class="ql-image"></button>
                                                         <button class="ql-video"></button></span></div>
                                                              <div id="editor4"></div>
                                                          </div>
                                                          <p class="f-light">رتبه سئوی خود را با توضیحات برچسب اضافه شده برای محصول افزایش دهید.</p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-buttons">
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                            </svg>قبلی
                                          </div>
                                        </div>
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">بعدی
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                            </svg>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="dropping-option" role="tabpanel" aria-labelledby="dropping-option-tab">
                                  <div class="meta-body">
                                    <form>
                                      <div class="row g-3 custom-input">
                                          <div class="col-12">
                                              <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                  <div class="col-12">
                                                      <label class="form-label" for="exampleFormControlInput1">از کجا می توانم سفارشم را تحویل بگیرم؟</label>
                                                  </div>
                                                  <div class="col-md-4 col-sm-6">
                                                      <input class="form-control" id="inputZip" type="number" placeholder="کد پستی (10001)">
                                                  </div>
                                                  <div class="col-md-4 col-sm-6">
                                                      <input class="form-control" id="inputCity" type="text" placeholder="شهر">
                                                  </div>
                                                  <div class="col-md-4">
                                                      <select class="form-select" id="inputState">
                                                          <option selected="">وضعیت</option>
                                                          <option>گجرات</option>
                                                          <option>پنجاب</option>
                                                          <option>هیماچال پرادش</option>
                                                          <option>گوا </option>
                                                          <option>Sikkim </option>
                                                          <option>تلانگانا</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <label class="form-label" for="exampleFormControlInput1">وزن (کیلوگرم)</label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs- placement="top" data-bs-title="تنظیم وزن مناسب برای اقلام محصول."></i>
                                                  </div>
                                                  <div class="col-12">
                                                      <input class="form-control" id="inputCitya" type="number">
                                                      <p class="f-light">تصمیم بگیرید که محصول دیجیتالی است یا فیزیکی. حمل و نقل ممکن است برای اقلام واقعی ضروری باشد.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="row gx-xl-3 gx-md-2 gy-md-0 g-2">
                                                  <div class="col-12">
                                                      <label class="form-label" for="exampleFormControlInput1">ابعاد </label><i class="icon-help-alt ms-1" data-bs-toggle="tooltip" data-bs-placement=" top" data-bs-title="تنظیم طول/عرض و ارتفاع مناسب برای اقلام محصول."></i>
                                                  </div>
                                                  <div class="col-md-4 col-sm-6">
                                                      <input class="form-control" id="inputCityb" type="number" placeholder="Length[l]">
                                                  </div>
                                                  <div class="col-md-4 col-sm-6">
                                                      <input class="form-control" id="inputCityc" type="number" placeholder="Width[w]">
                                                  </div>
                                                  <div class="col-md-4">
                                                      <input class="form-control" id="inputCityd" type="number" placeholder="Height[h]">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-12">
                                              <div class="row">
                                                  <div class="col-12">
                                                      <label class="form-label" for="exampleFormControlInput1">کلاس حمل و نقل</label>
                                                  </div>
                                                  <div class="col-md-12">
                                                      <select class="form-select" id="inputState1">
                                                          <option selected="">حمل و نقل اصلی</option>
                                                          <option>ارسال سریع</option>
                                                          <option>حمل و نقل بین المللی</option>
                                                          <option>ارسال رایگان</option>
                                                          <option>ارسال همان روز یا روز بعد</option>
                                                          <option>ارسال با نرخ ثابت</option>
                                                          <option> تحویل محلی</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="product-buttons">
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                            </svg>قبلی
                                          </div>
                                        </div>
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">بعدی
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                            </svg>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
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
          <!-- Container-fluid Ends-->
        </div>
@endsection

@section('customJs')
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone-script.js') }}"></script>
<script src="{{ asset('assets/js/select2/tagify.js') }}"></script>
<script src="{{ asset('assets/js/select2/tagify.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/js/select2/intltelinput.min.js') }}"></script>
<script src="{{ asset('assets/js/add-product/select4-custom.js') }}"></script>
<script src="{{ asset('assets/js/editors/quill.js') }}"></script>
<script src="{{ asset('assets/js/custom-add-product.js') }}"></script>
<script src="{{ asset('assets/js/height-equal.js') }}"></script>
<script src="{{ asset('assets/js/tooltip-init.js') }}"></script>

@endsection