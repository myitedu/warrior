<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container-fluid">
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
</div>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
