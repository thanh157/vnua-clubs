<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    @include('client.includes.style')
</head>
<body>

    <!-- Kiểm tra nếu không phải trang đăng nhập, thì hiển thị header -->
    @if(!request()->is('login')) 
        @include('client.includes.header')
    @endif

    @include('client.includes.script')
    @yield('content')

    <!-- Kiểm tra nếu không phải trang đăng nhập, thì hiển thị footer -->
    @if(!request()->is('login')) 
        @include('client.includes.footer')
    @endif

</body>
</html>
