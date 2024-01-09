<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('sidebar/css/style.css') }}">
    <title>Task Tracking MIS</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5">
                <img src="{{ asset('auth/undraw_Login_re_4vu2.png') }}" alt="auth" width="100%">
            </div>
            <div class="col-md-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
