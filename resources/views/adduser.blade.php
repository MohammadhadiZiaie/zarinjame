@extends('layout.master')

@section('titlePage')

<title>پنل مدیریت زرین جامه |افزودن کاربر جدید</title>

@endsection



@section('adduser')
<div class="page-body">

<div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                <div class="card height-equal" style="margin-top:50px ">
                  <div class="card-header">
                    <h4>افزودن کاربر جدید</h4>
                    
                    <form class="form theme-form" method="POST" action="{{ route('users.store') }}"    >
                    @csrf

                    <div class="card-body custom-input">
                      <div class="row">
                        <div class="col">
                          
                        <div class="mb-3 row">
                            <label class="col-sm-2">نام و نام خانوادگی</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="name" type="text" placeholder="نام و نام خانوادگی">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-2">ایمیل </label>
                            <div class="col-sm-10">
                              <input class="form-control" name="email" type="email" placeholder="ایمیل">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label class="col-sm-2">پسورد</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="password" type="password" placeholder="پسورد">
                            </div>
                          </div>
                          
                         
                         
                          <div class="mb-3 row"> 
                            <div class="col-sm-2">
                              <label class="form-label" for="datalistOptions">نوع کاربر</label>
                            </div>
                            <div class="col-sm-10">
                              <select class="form-select digits" id="datalistOptions">
                              <option>ادمین</option>
                              <option>اپراتور</option>
                              <option>مدیریت</option>
                              </select>
                            </div>
                          </div>
                          
                          
                          <div class="mb-3 row"> 
                            <div class="col-sm-2">
                              <label class="form-label" for="datalistOptions2">نقش کاربر</label>
                            </div>
                            <div class="col-sm-10">
                            <select class="form-select digits" name="role_id">
    @foreach($roles as $role)
        <option value="{{ $role->id }}">{{ $role->name }}</option>
    @endforeach
</select>
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
              </div>


@endsection