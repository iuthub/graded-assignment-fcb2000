
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="todofav.png">
        {{--New--}}
        @if (Request::path() == 'register')
{{--            <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
            <link rel="stylesheet" href="/forReg/fonts/material-icon/css/material-design-iconic-font.min.css">
            <link rel="stylesheet" href="/forReg/css/style.css">
            <title>Sign Up</title>

        @else
        <title>To Do List</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/styles.css">
        <!-- Styles -->
        @endif

    </head>
    <body>

    @if(Auth::check())
    <div class="myHeader">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" class="myBtn" value="Logout"/>
        </form>
    </div>
    @endif


    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
