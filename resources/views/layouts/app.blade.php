<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    @vite('resources/js/app.js')
    @yield('head-content')
</head>
<body>
    @include('partials.header')    


    @yield('main-content')
    
    @include('partials.footer')

    @yield('script-content')
</body>
</html>