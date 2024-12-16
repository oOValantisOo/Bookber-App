<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css-login-register/login-register.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>@yield('title', 'Project Bookber')</title>
</head>
<body>
    @yield('content')

    <script src="{{ asset('js-login-register/login-register.js') }}"></script>
    {{-- <script src="{{ asset('js-login-register/jquery.min.js') }}"></script>
    <script src="{{ asset('js-login-register/isotope.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js-login-register/counter.js') }}"></script> --}}
    
</body>
</html>