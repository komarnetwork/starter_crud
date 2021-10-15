<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Admin</title>
    {{-- Bootstrap 5.1.3 CSS Sass Mix With BS Icon & Font Awesome --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- BackEnd CSS --}}
    <link rel="stylesheet" href="{{ asset('backend/css/backend.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/trix.css') }}">
    @stack('custom-css')
</head>

<body>
    @include('backend.dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('backend.dashboard.layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('container_backend')
            </main>
        </div>
    </div>

    {{-- Bootstrap 5.1.3 JS Sass Mix --}}
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Vendor BackEnd Thirty Party-->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    @stack('vendor-js')
    <!-- Js BackEnd App-->
    <script src="{{ asset('backend/js/backend.js') }}"></script>

</body>

</html>
