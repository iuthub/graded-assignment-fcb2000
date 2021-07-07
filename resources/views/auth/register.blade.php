{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Sign Up</title>--}}

{{--    <!-- Font Icon -->--}}
{{--    <link rel="stylesheet" href="/forReg/fonts/material-icon/css/material-design-iconic-font.min.css">--}}

{{--    <!-- Main css -->--}}
{{--    <link rel="stylesheet" href="/forReg/css/style.css">--}}
{{--</head>--}}
{{--<body>--}}
@extends('layouts.master')

@section('content')
    @include('partials.errors')

    <div class="main">

    <!-- Sign up form -->
    <div class="signup">
        <div class="container" >
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password" required autocomplete="new-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" required autocomplete="new-password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        </div>
                        <div class="form-group form-button">
                            {{csrf_field()}}
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="/forReg/images/signup-image2.jpg" alt="sing up image"></figure>
                </div>
            </div>
        </div>
    </div>

<!-- JS -->
<script src="/forReg/vendor/jquery/jquery.min.js"></script>
<script src="/forReg/js/main.js"></script>

@endsection
{{--</body><!-- This templates was made by Colorlib (https://colorlib.com) -->--}}
{{--</html>--}}
