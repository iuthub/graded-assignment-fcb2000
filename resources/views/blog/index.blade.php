
@extends('layouts.master')

@section('content')
    @include('partials.errors')

    <div id="myDIV" class="header">
        <h1>My To Do List</h1>
    </div>
    <div class="loginDiv">
        <form method="POST" action="{{ route('login') }}">
{{--            copy--}}
            <label for="email">Email:</label>
            <input id="email"
                   type="email"
                   name="email"
                   class="email"
                   value="{{ old('email') }}"
                   placeholder="Enter email"
                   required
                   autocomplete="email"
                   autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label for="pwd">Password:</label>
            <input id="password"
                   type="password"
                   class="pwd"
                   name="password"
                   placeholder="Enter password"
                   required
                   autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{csrf_field()}}
            <input type="submit" value="Login" class="myBtn myBtnLogin"/>
        </form>
        <a href="{{ route('register') }}">Register</a>
    </div>
{{--            copy--}}

{{--            <input type="text" class="username" placeholder="Enter username" name="username">--}}
{{--            <input type="password" class="pwd" placeholder="Enter password" name="pwd">--}}
{{--            <button type="submit" class="btn">Submit</button>--}}
{{--    //container--}}

@endsection
