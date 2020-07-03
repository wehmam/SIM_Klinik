<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta http-equiv="refresh" content="5; URL=http://127.0.0.1:8000/"> --}}
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
</head>
<body>
    @yield('content')
    <script src="{{ asset('user/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('user/popper.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    {{-- <script>
    setTimeout(function(){
            window.location.reload(1);
    }, 5000);

    </script> --}}
</body>
</html>