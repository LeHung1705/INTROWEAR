@extends('layouts.app')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/css/detailaccount.css') }}" />
@endpush
@section('content')
<div class="container">
     <h1 style ="width : 100%, background-color : red; text-align:center;" >Thông tin tài khoản</h1>
    
    <button class="nav-button" style="font-size: 12px; padding : 20px;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    LOGOUT <i class="fas fa-sign-out"></i>
    </button>
    <form method="POST" action="{{route('logout')}}" id="logout-form" style="display: none; ">
        @csrf
    </form>


 @if(session('status'))
        <div class="alert alert-success" style="color:green; text-align: center;">{{ session('status') }}</div>
    @endif
    <div  class="form-container">
  <form method="POST" action="{{route('user.update')}}">
  @csrf
  @method('PUT')
    <div class="row">
      <div class="form-group">
        <label for="name">Họ và tên*</label>
        <input type="text" id="name" name="name" value="{{$user->name}}">
      </div>

    <div class="form-group">
      <label for="phone">Số điện thoại*</label>
      <input type="text" id="phone" name="phone" value="{{$user->phone}}">
    </div>


    <div class="form-group">
      <label for="email">Địa chỉ email *</label>
      <input type="email" id="email" name="email" value="{{$user->email}}">
    </div>
 </div>
    <h3>Thay đổi mật khẩu</h3>

    <div class="form-group">
      <label for="current-password">Mật khẩu hiện tại (bỏ trống nếu không đổi)</label>
      <input type="password" id="current-password" name="current_password">
      @if ($errors->has('current_password'))
    <div class="text-danger" style="color:red;">{{ $errors->first('current_password') }}</div>
@endif
    </div>
    

    <div class="form-group">
      <label for="new-password">Mật khẩu mới (bỏ trống nếu không đổi)</label>
      <input type="password" id="new-password" name="password">
    </div>

    <div class="form-group">
      <label for="confirm-password">Xác nhận mật khẩu mới</label>
      <input type="password" id="confirm-password" name="password_confirmation">
    </div>
@if ($errors->has('password'))
    <div class="text-danger" style="color:red;">{{ $errors->first('password') }}</div>
@endif
    <button type="submit">Lưu thay đổi</button>
  </form>
</div>
</div>

@endsection