<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UtsPweb</title>
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<body>
    @include('components.navbar')
    <div class = "container my-4">
        @yield('content')
    </div>
    @include('components.footer')
</body>
</html>
