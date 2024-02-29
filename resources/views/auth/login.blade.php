@extends('layouts.w-header')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Purchase </b>Orders</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        @if(Session::has('errorMessage'))
        <div class="callout callout-danger">
                <p>{{ session('errorMessage') }}</p>
              </div>    
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                <span class="text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <div class="col-xs-4">
                    <input type="radio" name="credential" id="credential" onclick="fillFields()" style="display: inline-block;">
                    <label for="credential" style="text-wrap: nowrap;">Login Credential</label>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
    </div>
    <!-- /.login-box-body -->
</div>
<script>
    function fillFields() {
        var radio = document.getElementById("credential");

        if (radio.checked) {
            var emailField = document.getElementById("email");
            var passwordField = document.getElementById("password");
            emailField.value = "juliush@gmail.com"; // Set your predefined email value
            passwordField.value = "12345678"; // Set your predefined password value
        }
    }
</script>
@endsection
