<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/admin/layouts/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/layouts/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/layouts/layout.css') }}">

    @stack('styles')
</head>
<body>


 

    <div class="admin-layout">

         

        @include('admin.layouts.header')

        @include('admin.layouts.sidebar')

        <main class="admin-content">
            @yield('content')
        </main>

    </div>

</body>
</html>