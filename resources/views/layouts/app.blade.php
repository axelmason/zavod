<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="logo-wrapper">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo"></a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Поиск по сайту" class="search-input">
            <button type="submit" class="search-button">
                <img src="{{ asset('img/search.png') }}" alt="search">
            </button>
        </div>
        <div class="header-items">
            <a href="tel:+"><img src="{{ asset('img/phone.png') }}" alt="phone"></a>
            <a href="mailto:"><img src="{{ asset('img/mail.png') }}" alt="mail"></a>
            <a href="#"><img src="{{ asset('img/map.png') }}" alt="map"></a>
        </div>
    </header>
    <div class="burger-button-wrapper">
        <button class="burger-button">&#9776;</button>
    </div>
    <nav class="burger flex justify-center">
        <ul class="burger-ul flex">
            <li class="nav-item"><a href="#">О нас</a></li>
            <li class="nav-item"><a href="#">Партнёры</a></li>
            <li class="nav-item"><a href="#">Продукция</a></li>
            <li class="nav-item"><a href="#">Контакты</a></li>
        </ul>
    </nav>
    <nav class="nav flex justify-center">
        <ul class="nav-ul flex">
            <li class="nav-item"><a href="#">О нас</a></li>
            <li class="nav-item"><a href="#">Партнёры</a></li>
            <li class="nav-item"><a href="#">Продукция</a></li>
            <li class="nav-item"><a href="#">Контакты</a></li>
        </ul>
    </nav>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>
