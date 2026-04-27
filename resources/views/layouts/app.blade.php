<!DOCTYPE html>
<html>
<head>
    <title>Inventaris Pribadi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: rgba(79, 70, 229, 0.9);
        }

        .card-modern {
            border: none;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .btn-primary {
            background: #4f46e5;
            border: none;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

@if(!request()->is('/'))
    @include('components.navbar')
@endif

<div class="container flex-grow-1">
    @yield('content')
</div>

@include('components.footer')

</body>
</html>
