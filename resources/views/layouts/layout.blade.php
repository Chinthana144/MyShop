<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Shop</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    <script src="{{ asset('js/jquery.min.js') }}"></script>

</head>
<body>

<div id="div_header">
    <div>
        Logo
    </div>
    <div id="div_nav_items">
        <div>Mens</div>
        <div>Women</div>
        <div>Kids</div>
    </div>
    <div>
        @guest
            <button class="btn btn-success">Sign in</button>
        @endguest
        @auth
            <button class="btn btn-success">Logout</button>
        @endauth
    </div>
</div>

<div id="div_image">
    {{-- <img src="{{ asset('images/banner-bg.png') }}" alt="" id="img_banner"> --}}
</div>

<button id="btn_run">Run</button>
<h1>My Shop</h1>


<script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
