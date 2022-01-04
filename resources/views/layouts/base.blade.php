<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BananaChat | @yield('title')</title>
    <link rel="icon" href="/assets/logo-bananachat.png">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    
    @yield('content')

</body>
</html>