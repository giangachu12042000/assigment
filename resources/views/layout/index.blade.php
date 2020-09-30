<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
</head>
<body>
    <header class="row">
        @yield('header')
    </header>
    <div class="row">
        @yield('content')
    </div>

    <footer>
        @yield('footer')
    </footer>
</body>
</html>