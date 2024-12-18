@extends('layout.master')

@section('titlePage')
<title>ثبت سفارش - مرحله 2</title>
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

            <h2 class="mb-4">ثبت سفارش جدید - مرحله 2</h2>

            <!-- نوار پیشرفت -->
            <div class="progress mb-4" style="height: 25px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                     role="progressbar" style="width: 50%; background:#23402E;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                     50%
                </div>
            </div>

            <form action="{{ route('orders.post.step2') }}" method="POST">
                @csrf
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label">سایزبندی</label>
                        <input type="text" name="size_scheme" class="form-control" required>
                        @error('size_scheme')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">تعداد</label>
                        <input type="number" name="quantity" class="form-control" min="1" required>
                        @error('quantity')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <h4 class="mt-4 mb-3">پارچه اصلی</h4>
                <div class="table-responsive mb-4">
                <table class="table table-bordered" id="mainFabricTable">
                    <thead class="table-dark" style="background:#23402E;">
                        <tr>
                            <th>جنس پارچه</th>
                            <th>کد کالیته</th>
                            <th>رنگ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="main-fabric-row">
                            <td><input type="text" name="main_fabric[0][type]" class="form-control" required></td>
                            <td><input type="text" name="main_fabric[0][code]" class="form-control" required></td>
                            <td><input type="text" name="main_fabric[0][color]" class="form-control" required></td>
                            <td><button type="button" class="btn btn-success addMainFabricRow">+</button></td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <h4 class="mt-4 mb-3">پارچه خرج کار</h4>
                <div class="table-responsive mb-4">
                <table class="table table-bordered" id="additionalFabricTable">
                    <thead class="table-dark" style="background:#23402E;">
                        <tr>
                            <th>جنس پارچه</th>
                            <th>کد کالیته</th>
                            <th>رنگ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="additional-fabric-row">
                            <td><input type="text" name="additional_fabric[0][type]" class="form-control" required></td>
                            <td><input type="text" name="additional_fabric[0][code]" class="form-control" required></td>
                            <td><input type="text" name="additional_fabric[0][color]" class="form-control" required></td>
                            <td><button type="button" class="btn btn-success addAdditionalFabricRow">+</button></td>
                        </tr>
                    </tbody>
                </table>
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
<script>
$(document).ready(function() {
    let mainFabricIndex = 1;
    $('.addMainFabricRow').click(function() {
        let newRow = `<tr class="main-fabric-row">
            <td><input type="text" name="main_fabric[${mainFabricIndex}][type]" class="form-control" required></td>
            <td><input type="text" name="main_fabric[${mainFabricIndex}][code]" class="form-control" required></td>
            <td><input type="text" name="main_fabric[${mainFabricIndex}][color]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger removeMainFabricRow">-</button></td>
        </tr>`;
        $('#mainFabricTable tbody').append(newRow);
        mainFabricIndex++;
    });

    $(document).on('click', '.removeMainFabricRow', function() {
        $(this).closest('tr').remove();
    });

    let additionalFabricIndex = 1;
    $('.addAdditionalFabricRow').click(function() {
        let newRow = `<tr class="additional-fabric-row">
            <td><input type="text" name="additional_fabric[${additionalFabricIndex}][type]" class="form-control" required></td>
            <td><input type="text" name="additional_fabric[${additionalFabricIndex}][code]" class="form-control" required></td>
            <td><input type="text" name="additional_fabric[${additionalFabricIndex}][color]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger removeAdditionalFabricRow">-</button></td>
        </tr>`;
        $('#additionalFabricTable tbody').append(newRow);
        additionalFabricIndex++;
    });

    $(document).on('click', '.removeAdditionalFabricRow', function() {
        $(this).closest('tr').remove();
    });
});
</script>
@endsection
