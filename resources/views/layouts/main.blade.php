<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Belajar Laravel</title>
    {{-- Bootstrap 5.1.3 CSS Sass Mix --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- FrontEnd CSS --}}
    <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
    {{-- Bootstrap 5.1.3 JS Sass Mix --}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
