@extends('layout.master')

@section('titlePage')
<title>جزئیات سفارش</title>
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

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>جزئیات سفارش شماره {{ $order->order_number }}</h2>
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">بازگشت به لیست سفارشات</a>
                </div>

                <h4 class="mt-4 mb-3">اطلاعات پایه</h4>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>نام محصول</th>
                        <td>{{ $order->product_name }}</td>
                    </tr>
                    <tr>
                        <th>مشتری</th>
                        <td>{{ $order->customer ? $order->customer->name : '-' }}</td>
                    </tr>
                    <tr>
                        <th>تاریخ سفارش</th>
                        <td>{{ $order->order_date ? $order->order_date->format('Y-m-d H:i') : '-' }}</td>
                    </tr>
                    <tr>
                        <th>سفارش قبلی</th>
                        <td>{{ $order->previousOrder ? $order->previousOrder->order_number : 'ندارد' }}</td>
                    </tr>
                    <tr>
                        <th>ارجاع به</th>
                        <td>{{ isset($order->assignedUser) ? $order->assignedUser->name : 'ارجاع نشده' }}</td>
                    </tr>
                    <tr>
                        <th>فرآیند</th>
                        <td>{{ isset($order->process_id) ? 'فرآیند ID: ' . $order->process_id : 'بدون فرآیند' }}</td>
                    </tr>
                </table>
                </div>

                <h4 class="mt-4 mb-3">سایزبندی و تعداد</h4>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>سایزبندی</th>
                        <td>{{ $order->size_scheme ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>تعداد</th>
                        <td>{{ $order->quantity ?? '-' }}</td>
                    </tr>
                </table>
                </div>

                <h4 class="mt-4 mb-3">پارچه اصلی</h4>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>جنس پارچه</th>
                            <th>کد کالیته</th>
                            <th>رنگ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(is_array($order->main_fabric))
                            @foreach($order->main_fabric as $mf)
                            <tr>
                                <td>{{ $mf['type'] }}</td>
                                <td>{{ $mf['code'] }}</td>
                                <td>{{ $mf['color'] }}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td colspan="3">اطلاعاتی ثبت نشده</td></tr>
                        @endif
                    </tbody>
                </table>
                </div>

                <h4 class="mt-4 mb-3">پارچه خرج کار</h4>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>جنس پارچه</th>
                            <th>کد کالیته</th>
                            <th>رنگ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(is_array($order->additional_fabric))
                            @foreach($order->additional_fabric as $af)
                            <tr>
                                <td>{{ $af['type'] }}</td>
                                <td>{{ $af['code'] }}</td>
                                <td>{{ $af['color'] }}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td colspan="3">اطلاعاتی ثبت نشده</td></tr>
                        @endif
                    </tbody>
                </table>
                </div>

                <h4 class="mt-4 mb-3">خدمات</h4>
                <ul class="list-group mb-3">
                    @if(is_array($order->services) && count($order->services) > 0)
                        @foreach($order->services as $service)
                        <li class="list-group-item">{{ $service }}</li>
                        @endforeach
                    @else
                        <li class="list-group-item text-muted">بدون خدمات</li>
                    @endif
                </ul>

                <h4 class="mt-4 mb-3">مواد غیر مستقیم تولید</h4>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>نوع</th>
                            <th>سایز</th>
                            <th>تعداد</th>
                            <th>ردیف</th>
                            <th>شرح</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(is_array($order->indirect_materials) && count($order->indirect_materials) > 0)
                            @foreach($order->indirect_materials as $im)
                            <tr>
                                <td>{{ $im['type'] }}</td>
                                <td>{{ $im['size'] }}</td>
                                <td>{{ $im['quantity'] }}</td>
                                <td>{{ $im['row'] }}</td>
                                <td>{{ $im['description'] }}</td>
                            </tr>
                            @endforeach
                        @else
                            <tr><td colspan="5">بدون مواد غیرمستقیم</td></tr>
                        @endif
                    </tbody>
                </table>
                </div>

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