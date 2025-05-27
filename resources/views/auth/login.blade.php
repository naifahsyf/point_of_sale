@extends('layouts.auth')

@section('login')
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
 <div class="login-box-body">
  <div class="login-logo">
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo.jpg') }}" alt="logo.jpg" width="80">
       </a>
  </div>
<div class="login-logo">
    <a href="../../index2.html"><b>FASHION</b>store</a>
  </div>
    <form action="{{ route('login') }}" method="post">
        @csrf
      <div class="form-group has-feedback @error('email') has-error @enderror">
        <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         @error ('email')
        <span class="help-block">Check your email and password again</span>
        @enderror
      </div>
      <div class="form-group has-feedback @error('password') has-error @enderror">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error ('password')
        <span class="help-block"></span>
        @enderror
      </div>

      <div class="row">
        <div class="col-xs-8">  
          
        </div>

        <div class="text-end pt-4">
            <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot password?</a></p>
        </div>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary  ">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
   <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection