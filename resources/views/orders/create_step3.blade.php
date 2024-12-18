@extends('layout.master')

@section('titlePage')
<title>ثبت سفارش - مرحله 3</title>
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

            <h2 class="mb-4">ثبت سفارش جدید - مرحله 3</h2>

            <!-- نوار پیشرفت -->
            <div class="progress mb-4" style="height: 25px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                     role="progressbar" style="width: 75%; background:#23402E;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                     75%
                </div>
            </div>

            <form action="{{ route('orders.post.step3') }}" method="POST">
                @csrf

                <h4 class="mb-3">خدمات</h4>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" name="services[]" value="print" id="print">
                    <label class="form-check-label" for="print">چاپ</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" name="services[]" value="embroidery" id="embroidery">
                    <label class="form-check-label" for="embroidery">گلدوزی</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" name="services[]" value="washing" id="washing">
                    <label class="form-check-label" for="washing">شست</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" name="services[]" value="packaging" id="packaging">
                    <label class="form-check-label" for="packaging">بسته بندی</label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" name="services[]" value="brochure" id="brochure">
                    <label class="form-check-label" for="brochure">بروشور</label>
                </div>

                <button type="submit" class="btn" style="background:#23402E; color:#fff;">مرحله بعد</button>
            </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('customJs')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2/dist/js/select2.min.js"></script>
@endsection