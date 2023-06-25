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
           <a href="{{ route('home') }}"><img src="{{ asset('/img/logo.png') }}" alt="Logo" class="logo w-[150px;]"></a>
        </div>
        <div class="header-items gap-20 lg:flex max-lg:hidden">
            <a class="header-item transition duration-200 transform hover:translate-y-[-5px]" href="tel:7-913-623-39-20"><img src="{{ asset('/img/phone.png') }}" alt="phone"></a>
            <a class="show-modal header-item transition duration-200 transform hover:translate-y-[-5px]" href="#"><img src="{{ asset('/img/mail.png') }}" alt="mail"></a>
            <a class="header-item transition duration-200 transform hover:translate-y-[-5px]" href="https://yandex.ru/maps/-/CCUDvNQbWC"><img src="{{ asset('/img/map.png') }}" alt="map"></a>
        </div>
    </header>
    @endif
    @if($settings->where('alias', 'nav')->first()->active)
    <div class="burger-button-wrapper flex justify-center items-center;">
        <i class="fas burger-button fa-bars lg:hidden"></i>
        <i class="fas burger-close-button fa-times hidden"></i>
    </div>
    <nav class="burger hidden">
        <ul class="burger-ul space-y-4">
            <li class="nav-item"><a href="{{ route('home') }}">Главная</a></li>
            <li class="nav-item"><a href="{{ route('aboutPage') }}">О нас</a></li>
            <li class="nav-item"><a href="{{ route('partnersPage') }}">Партнёры</a></li>
            <li class="nav-item"><a href="{{ route('catalogPage') }}">Продукция</a></li>
            <li class="nav-item"><a href="{{ route('contactsPage') }}">Контакты</a></li>
        </ul>
        <div class="flex gap-5 py-5">
            <a class="header-item" href="tel:+"><img src="{{ asset('/img/phone.png') }}" alt="phone"></a>
            <a class="show-modal header-item" href="#"><img src="{{ asset('/img/mail.png') }}" alt="mail"></a>
            <a class="header-item" href="https://yandex.ru/maps/-/CCUDvNQbWC"><img src="{{ asset('/img/map.png') }}" alt="map"></a>
        </div>
    </nav>
    <nav class="nav block">
        <ul class="nav-ul flex justify-center">
            <li class="nav-item"><a href="{{ route('home') }}">Главная</a></li>
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
    @if($settings->where('alias', 'footer')->first()->active)
    <footer class="bg-gray-100 footer">
        <div class="container px-5 mx-auto">
            <div class="footer-links flex max-md:flex-col gap-5 items-start mb-[50px]">
                <div class="footer-link">
                    <h2 class="title">Контакты</h2>
                    <ul class="space-y-3">
                        <li> <a href="{{ route('contactsPage') }}">Контакты</a> </li>
                        <li> <a href="tel:+73817021294">Отдел кадров: +7-381-702-12-94</a></li>
                        <li> <a href="tel:+79136233920">Отдел продаж: +7-913-623-3920</a></li>
                    </ul>
                </div>
                <div class="footer-link">
                    <h2 class="title">Компания</h2>
                    <ul class="space-y-3">
                        <li> <a href="{{ route('aboutPage') }}">О нас</a> </li>
                        <li> <a href="{{ route('partnersPage') }}">Партнёры</a></li>
                    </ul>
                </div>
             </div>
            <div class="social flex space-x-3">
                <a href="https://t.me/vladimiraslanov"><img class="w-10" src="{{ asset('/img/Telegram_2019_Logo.svg') }}" alt="Telegram"></a>
                <a href="https://wa.me/+79136233920"><img class="w-10" src="{{ asset('/img/WhatsApp.svg') }}" alt="WhatsApp"></a>
            </div>
        </div>
    </footer>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close absolute top-2 right-2 text-xl font-semibold cursor-pointer hover:text-black">&times;</span>
            <form class="modal-form" onsubmit="return false;">
                @csrf
                <h3 class="text-2xl text-center">Форма обратной связи</h3>
                <div class="success-message text-green-600"></div>
                <div class="errors-message text-red-600"></div>
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="text">Текст:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <div>
                    <input class="mr-2" type="checkbox" id="rules" name="rules" required>
                    <label for="rules"> <a href="{{ route('privacy') }}">Согласие с обработкой данных</a></label>
                </div>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
    @endif
    <button id="btn-call" class="btn-call">
        <a href="tel:7-913-623-39-20"><img src="{{ asset('/img/phone.png') }}" alt="phone"></a>
    </button>
    <button id="back-to-top" class="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('main.js') }}"></script>
</body>
</html>
