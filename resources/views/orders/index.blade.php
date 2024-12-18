@extends('layout.master')

@section('titlePage')
    <title>لیست سفارش‌ها</title>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2/dist/js/select2.min.js"></script>
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
            <div class="card" style="border:1px solid #23402E;">
            <div class="card-body" style="background:#fff;">
                <h2 class="mb-4">لیست سفارش‌ها</h2>

                @if(session('success'))
                    <div class="alert alert-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif

                @if($orders->isEmpty())
                    <p class="text-muted">هیچ سفارشی ثبت نشده است.</p>
                @else
                    <div class="table-responsive">
                    <table class="table table-bordered mt-3 table-striped align-middle">
                        <thead class="table-dark" style="background:#23402E;">
                            <tr>
                                <th>شماره سفارش</th>
                                <th>نام محصول</th>
                                <th>مشتری</th>
                                <th>تاریخ سفارش</th>
                                <th>تعداد</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->product_name ?? '---' }}</td>
                                <td>{{ $order->customer ? $order->customer->name : 'بدون مشتری' }}</td>
                                <td>{{ $order->order_date ? $order->order_date->format('Y-m-d') : '-' }}</td>
                                <td>{{ $order->quantity ?? '-' }}</td>
                                <td>
                                    @if($order->status == 'pending')
                                        <span class="badge bg-warning text-dark">در انتظار</span>
                                    @elseif($order->status == 'completed')
                                        <span class="badge bg-success">تکمیل شده</span>
                                    @elseif($order->status == 'cancelled')
                                        <span class="badge bg-danger">لغو شده</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">جزئیات</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                @endif
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
