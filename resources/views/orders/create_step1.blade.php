@extends('layout.master')

@section('titlePage')
<title>ثبت سفارش - مرحله 1</title>
@endsection

@section('customCSS')

<link href="https://cdn.jsdelivr.net/npm/select2@4/dist/css/select2.min.css" rel="stylesheet" />

<style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: #f8f9fa;
            color: #23402E;
        }
        h2, h4 {
            color: #23402E;
        }
        .step-indicator {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .step {
            width: 30px;
            height: 30px;
            background: #ccc;
            border-radius: 50%;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .step.active {
            background: #23402E;
        }
        .progress-bar-custom {
            background-color: #23402E !important;
        }
    </style>
@endsection

@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
      <div class="card" style="border:1px solid #23402E;">
        <div class="card-body" style="background:#fff;">
            <h2 class="mb-4">ثبت سفارش جدید - مرحله 1</h2>

            <!-- نوار پیشرفت -->
            <div class="progress mb-4" style="height: 25px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                     role="progressbar" style="width: 25%; background:#23402E;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                     25%
                </div>
            </div>

            <small class="text-muted d-block mb-3">تاریخ پیش‌فرض: امروز</small>

            <form action="{{ route('orders.post.step1') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">نام محصول</label>
                        <input type="text" name="product_name" class="form-control" required>
                        @error('product_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">مشتری</label>
                        <select name="customer_id" class="form-select js-select2" required>
                            <option value="">انتخاب کنید</option>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </select>
                        @error('customer_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">تاریخ سفارش( به طور پیشرفض برای امروز است )</label>
                        <input type="text" name="order_date" id="order_date" class="form-control" required>
                        @error('order_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">کد سفارش‌های قبلی مشتری (اختیاری)</label>
                        <select name="previous_order_id" class="form-select js-select2">
                            <option value="">انتخاب کنید</option>
                            <!-- بعدا با AJAX سفارشات قبلی مشتری را بارگذاری کنید -->
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn mt-4" style="background:#23402E; color:#fff;">مرحله بعد</button>
            </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('customJs')
<script src="https://cdn.jsdelivr.net/npm/persian-date/dist/persian-date.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/persian-datepicker@1.2.0/dist/js/persian-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    // فعال‌سازی Select2 برای انتخاب مشتری
    $('.js-select2').select2({
        placeholder: 'جستجو و انتخاب کنید',
        language: {
            noResults: function() {
                return "نتیجه‌ای یافت نشد!";
            }
        }
    });

    // تنظیم تاریخ امروز شمسی
    let pDate = new persianDate();
    let today = pDate.format('YYYY/MM/DD');
    $('#order_date').val(today);

    // اعمال Persian Datepicker به فیلد تاریخ
    $("#order_date").persianDatepicker({
        format: 'YYYY/MM/DD',
        initialValue: true,
        initialValueType: 'persian',
        autoClose: true,
        toolbox: {
            calendarSwitch: {
                enabled: true,
            }
        }
    });
});

</script>
@endsection
