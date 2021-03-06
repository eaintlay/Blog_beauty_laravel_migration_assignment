<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beauty Blog - @yield('title')</title>

    <link href="{{ asset('frontendtemplate/instylr/img/favicon.ico')}}" rel="shortcut icon"/>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/owl.carousel.min.css')}}"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontendtemplate/instylr/css/style.css')}}"/>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Laravel Posts</a></li>
        </ul>
        <ul>
            <li><a href="/posts">Posts</a></li>
            <li><a href="/posts/create">Create Post</a></li>
        </ul>
    </nav>

    <main class="container">
        @yield('content')
    </main>
    <script src="{{ asset('frontendtemplate/instylr/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/instylr/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/instylr/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontendtemplate/instylr/js/main.js')}}"></script>
</body>
</html>
