@extends('layout.master')

@section('titlePage')
<title>پنل مدیریت زرین جامه | افزودن مشتری جدید</title>
@endsection

@section('addcustomer')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card height-equal" style="margin-top:50px">
                    <div class="card-header">
                        <h4>افزودن مشتری جدید</h4>
                    </div>
                    <form class="form theme-form" method="POST" action="{{ route('customers.add') }}">
                        @csrf
                        <div class="card-body custom-input">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-2">نام و نام خانوادگی</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="name" type="text" placeholder="نام و نام خانوادگی" value="{{ old('name') }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2">ایمیل</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="email" type="email" placeholder="ایمیل" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2">شماره تماس</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="phone" type="text" placeholder="شماره تماس" value="{{ old('phone') }}" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2">کد ملی</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="codemeli" type="text" placeholder="کد ملی" value="{{ old('codemeli') }}" maxlength="10" pattern="\d{10}" required>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-2">آدرس</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="address" type="text" placeholder="آدرس" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary me-3" type="submit">افزودن</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
