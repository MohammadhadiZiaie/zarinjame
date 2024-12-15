@extends('layout.master')

@section('titlePage')
<title>پنل مدیریت زرین جامه | لیست کاربران</title>
@endsection

@section('customCSS')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
@endsection

@section('listuser')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4>لیست کاربران</h4>
                        <span>امکان جستجو و فیلتر دارد</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>شناسه</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>ایمیل</th>
                                        <th>نوع کاربر</th>
                                        <th>زیرنقش‌ها</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    <span class="badge badge-primary">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    @php
                                                        // استخراج زیرنقش‌ها از جدول user_roles
                                                        $subRoles = $role->userRoles->pluck('sub_role')->unique();
                                                    @endphp
                                                    
                                                    @if($subRoles->count() > 0)
                                                        @foreach($subRoles as $subRole)
                                                            <span class="badge badge-info">{{ $subRole }}</span>
                                                        @endforeach
                                                    @else
                                                        <span class="badge badge-warning">بدون زیرنقش</span>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"><a href="#"><i class="icon-pencil-alt"></i></a></li>
                                                    <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
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
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/header-slick.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection
