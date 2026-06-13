<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/admin/layouts/header.css') }}">
     <link rel="stylesheet" href="{{ asset('css/admin/layouts/sidebar.css') }}">
     @stack('styles')
</head>
<body>
    @include('admin.layouts.header')

    <div class="main-container">

        @include('admin.layouts.sidebar')

        <div class="content">
            @yield('content')
        </div>

    </div>
</body>
</html>