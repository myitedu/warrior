<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::to('/')}}/bootstrap/css/bootstrap.css">
    <script src="{{\Illuminate\Support\Facades\URL::to('/')}}/bootstrap/js/jquery.js"></script>
</head>
<body>
<div class="container-fluid">
    <div id="myheader">

        <nav>
            <img class="logo" src="{{\Illuminate\Support\Facades\URL::to('/')}}/img/logo.png">
            <a target="_blank" href="{{\Illuminate\Support\Facades\URL::to('/')}}"> Home </a>
            <a target="_blank" href="{{\Illuminate\Support\Facades\URL::to('/')}}/contactus"> Contact Us </a>
            <a target="_blank" href="{{\Illuminate\Support\Facades\URL::to('/')}}/services"> Our Services </a>
            <a target="_blank" href="{{\Illuminate\Support\Facades\URL::to('/')}}/testimonials"> Testimonials </a>
        </nav>
    </div>
    <div id="mycontent">
        <div class="mail_body">
            <h2>Happy Birthday!</h2>
            <div class="mail_title">Hello, {{$data['name']}}</div>
            <img class="divider" src="{{\Illuminate\Support\Facades\URL::to('/')}}/img/divider.png">
            <p>Your friend Jon wants to wish you Happy Birthday and he said:</p>
            <div class="your_message">{{$data['your_message']}}</div>
        </div>
    </div>
</div>

<style>
    .divider{
        width: 50%;
        margin: auto;
    }
    .logo{
        width: 150px;
    }
    #myheader nav{
        width: 100%;
        height: auto;
        padding:10px;
        background-color: #e9e5e5;
        color: white;
        border-bottom: 5px solid darkblue;
    }
    #myheader nav a{
        margin: 5px;
    }
    .mail_body {
        width: 58%;
        margin: auto;
        position: relative;
        top: 200px;

    }

    html, body {
        width: 100%;
        height: 100%;
    }

    #mycontent {
        width: 100%;
        height: 700px;
        background-image: url("{{\Illuminate\Support\Facades\URL::to('/')}}/img/islam2.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>
<script src="{{\Illuminate\Support\Facades\URL::to('/')}}/bootstrap/js/bootstrap.js"></script>
</body>
</html>

