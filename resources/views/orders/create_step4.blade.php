@extends('layout.master')

@section('titlePage')
<title>ثبت سفارش - مرحله 4</title>
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

            <h2 class="mb-4">ثبت سفارش جدید - مرحله 4</h2>

            <!-- نوار پیشرفت -->
            <div class="progress mb-4" style="height: 25px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" 
                     role="progressbar" style="width: 100%; background:#23402E;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                     100%
                </div>
            </div>

            <form action="{{ route('orders.post.step4') }}" method="POST">
                @csrf

                <h4 class="mb-3">مواد غیر مستقیم تولید</h4>
                <div class="table-responsive mb-4">
                <table class="table table-bordered" id="indirectMaterialsTable">
                    <thead class="table-dark" style="background:#23402E;">
                        <tr>
                            <th>نوع</th>
                            <th>سایز</th>
                            <th>تعداد</th>
                            <th>ردیف</th>
                            <th>شرح</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="indirect-material-row">
                            <td><input type="text" name="indirect_materials[0][type]" class="form-control" required></td>
                            <td><input type="text" name="indirect_materials[0][size]" class="form-control" required></td>
                            <td><input type="number" name="indirect_materials[0][quantity]" class="form-control" min="1" required></td>
                            <td><input type="text" name="indirect_materials[0][row]" class="form-control" required></td>
                            <td><input type="text" name="indirect_materials[0][description]" class="form-control" required></td>
                            <td><button type="button" class="btn btn-success addIndirectMaterialRow">+</button></td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <button type="submit" class="btn" style="background:#23402E; color:#fff;">ثبت نهایی سفارش</button>
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
    let indirectIndex = 1;
    $('.addIndirectMaterialRow').click(function() {
        let newRow = `<tr class="indirect-material-row">
            <td><input type="text" name="indirect_materials[${indirectIndex}][type]" class="form-control" required></td>
            <td><input type="text" name="indirect_materials[${indirectIndex}][size]" class="form-control" required></td>
            <td><input type="number" name="indirect_materials[${indirectIndex}][quantity]" class="form-control" min="1" required></td>
            <td><input type="text" name="indirect_materials[${indirectIndex}][row]" class="form-control" required></td>
            <td><input type="text" name="indirect_materials[${indirectIndex}][description]" class="form-control" required></td>
            <td><button type="button" class="btn btn-danger removeIndirectMaterialRow">-</button></td>
        </tr>`;
        $('#indirectMaterialsTable tbody').append(newRow);
        indirectIndex++;
    });

    $(document).on('click', '.removeIndirectMaterialRow', function() {
        $(this).closest('tr').remove();
    });
});
</script>
@endsection
