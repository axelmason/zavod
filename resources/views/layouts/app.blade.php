<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>


    <title>@yield('title')</title>
</head>
<body>
    @if($settings->where('alias', 'header')->first()->active)
    <header>
        <div class="logo-wrapper md:text-center">
           <a href="{{ route('home') }}"><img src="{{ asset('/img/logo.png') }}" alt="Logo" class="logo"></a>
        </div>
        <div class="header-items lg:flex max-lg:hidden">
            <a class="header-item" href="tel:+79999999999"><img src="{{ asset('/img/phone.png') }}" alt="phone"></a>
            <a class="header-item" id="show-modal" href="#"><img src="{{ asset('/img/mail.png') }}" alt="mail"></a>
            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form class="modal-form" onsubmit="return false;">
                        @csrf
                        <h3 class="title text-center">Форма обратной связи</h3>
                        <div class="success-message text-green-600"></div>
                        <div class="errors-message text-red-600"></div>
                        <label for="name">Имя:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="text">Текст:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
            <a class="header-item" href="{{ route('contactsPage') }}"><img src="{{ asset('/img/map.png') }}" alt="map"></a>
        </div>
    </header>
    @endif
    @if($settings->where('alias', 'nav')->first()->active)
    <div class="burger-button-wrapper flex justify-center items-center;">
        <i class="fas burger-button fa-bars md:hidden"></i>
        <i class="fas burger-close-button fa-times hidden"></i>
    </div>
    <nav class="burger hidden">
        <ul class="burger-ul">
            <li class="nav-item"><a href="{{ route('aboutPage') }}">О нас</a></li>
            <li class="nav-item"><a href="{{ route('partnersPage') }}">Партнёры</a></li>
            <li class="nav-item"><a href="{{ route('catalogPage') }}">Продукция</a></li>
            <li class="nav-item"><a href="{{ route('contactsPage') }}">Контакты</a></li>
        </ul>
        <div class="flex">
            <a class="header-item" href="tel:+"><img src="{{ asset('/img/phone.png') }}" alt="phone"></a>
            <a class="header-item" href="mailto:"><img src="{{ asset('/img/mail.png') }}" alt="mail"></a>
            <a class="header-item" href="{{ route('contactsPage') }}"><img src="{{ asset('/img/map.png') }}" alt="map"></a>
        </div>
    </nav>
    <nav class="nav block">
        <ul class="nav-ul flex justify-center">
            <li class="nav-item"><a href="{{ route('aboutPage') }}">О нас</a></li>
            <li class="nav-item"><a href="{{ route('partnersPage') }}">Партнёры</a></li>
            <li class="nav-item"><a href="{{ route('catalogPage') }}">Продукция</a></li>
            <li class="nav-item"><a href="{{ route('contactsPage') }}">Контакты</a></li>
        </ul>
    </nav>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif
    @yield('content')
    <hr>
    @if($settings->where('alias', 'footer')->first()->active)
    <footer>
        <div class="container">
            <div class="footer-links flex max-md:flex-col gap-5 items-start mb-[50px]">
                <div class="footer-link">
                    <h2 class="title">Контакты</h2>
                    <ul class="space-y-3">
                        <li> <a href="{{ route('contactsPage') }}">Контакты</a> </li>
                        <li> <a href="tel: +7 999 999 999">Отдел кадров</a> </li>
                        <li> <a href="tel: +7 999 999 999">Отдел продаж</a> </li>
                    </ul>
                </div>
                <div class="footer-link">
                    <h2 class="title">Компания</h2>
                    <ul class="space-y-3">
                        <li> <a href="{{ route('aboutPage') }}">О нас</a> </li>
                    </ul>
                </div>
             </div>
            <div class="social flex space-x-3">
                <img class="w-10" src="{{ asset('/img/Telegram_2019_Logo.svg') }}" alt="Telegram">
                <img class="w-10" src="{{ asset('/img/WhatsApp.svg') }}" alt="WhatsApp">
            </div>
        </div>
    </footer>
    @endif
    <button id="btn-call" class="btn-call">
        <a href="tel:+7999999999"><img src="{{ asset('/img/phone.png') }}" alt="phone"></a>
    </button>
    <button id="back-to-top" class="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>
