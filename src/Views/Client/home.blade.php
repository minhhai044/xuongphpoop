<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
</head>
<body>
    <h1>Trang chủ</h1>
    <p>Tên tôi là : {{ $name }}</p>
    <a href="{{url('login')}}">Login</a>
</body>
</html>