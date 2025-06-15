<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font (Optional) -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-light text-dark">

    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        @if (Route::has('login'))
            <div class="position-absolute top-0 end-0 p-3">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-outline-dark btn-sm">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm me-2">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-dark btn-sm">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="text-center">
            <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo" height="100" class="mb-4">
            <h1 class="fw-bold">Welcome to Laravel</h1>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
