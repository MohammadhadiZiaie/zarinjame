@extends('layout.master')

@section('titlePage')
<title>لیست سفارش‌ها و قراردادها</title>
@endsection

@section('content')

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

                @if(session('error'))
                    <div class="alert alert-danger mt-2">
                        {{ session('error') }}
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
                                <th>وضعیت قرارداد</th>
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
                                    @if($order->status == 'completed')
                                        <span class="badge bg-success">قرارداد تنظیم شده</span>
                                    @else
                                        <span class="badge bg-secondary">بدون قرارداد</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- جزئیات سفارش همیشه -->
                                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm mb-1">جزئیات سفارش</a><br>
                                    
                                    @if($order->status == 'completed')
                                        <!-- وقتی قرارداد تنظیم شده (status=completed)، فقط دانلود قرارداد -->
                                        @php
                                            // پیدا کردن قرارداد مرتبط با این سفارش
                                            $contract = \App\Models\Contract::where('order_id',$order->id)->first();
                                        @endphp
                                        @if($contract && $contract->status == 'generated')
                                            <a href="{{ route('contracts.download', $contract->id) }}" class="btn btn-primary btn-sm">دانلود قرارداد</a>
                                        @endif
                                    @elseif($order->status == 'pending')
                                        <!-- وقتی قرارداد تنظیم نشده (status=pending)، دکمه تنظیم قرارداد -->
                                        <a href="{{ route('contracts.create', $order->id) }}" class="btn btn-warning btn-sm">تنظیم قرارداد</a>
                                    @endif
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
