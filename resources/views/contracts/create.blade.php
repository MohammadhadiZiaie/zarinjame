@extends('layout.master')

@section('titlePage')
<title>تنظیم قرارداد</title>
@endsection

@section('content')
<div class="page-body">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
      <div class="card" style="border:1px solid #23402E;">
        <div class="card-body" style="background:#fff;">

            <h2 class="mb-4">تنظیم قرارداد برای سفارش شماره {{ $order->order_number }}</h2>

            <p>مشتری: {{ $order->customer ? $order->customer->name : '-' }}</p>
            <p>محصول: {{ $order->product_name ?? '-' }}</p>
            <p>تعداد: {{ $order->quantity ?? '-' }}</p>

            <!-- در صورت نیاز فیلدهای دیگری برای ویرایش قرارداد -->
            <form action="{{ route('contracts.store', $order->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn" style="background:#23402E; color:#fff;">
                    ایجاد قرارداد
                </button>
            </form>

        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
