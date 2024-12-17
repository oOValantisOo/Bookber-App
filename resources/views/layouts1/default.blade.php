<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/css/bootstrap.min.css',
        'resources/css/bookber.css',
        'resources/css/owl.css',
        'resources/css/animate.css',
        'resources/js/jquery.min.js',
        'resources/js/custom.js',
        'resources/js/bookber.js',
        'resources/js/bootstrap.min.js'
    ])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @include('components.navbar')
    <title>@yield('title1', 'Project Bookber1')</title>
</head>
<body>
    @yield('content1')
</body>
</html>
