@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<section class="flex justify-center items-center py-5 ">
    <div class="w-full">
        <div class="slick relative">
            <div class="slide relative">
                <div class="slide-img">
                    <img class="object-cover w-full h-64" src="{{ asset('/img/wheat.png') }}" alt="slide">
                </div>
                <div class="slide-text absolute inset-0 flex items-center justify-center">
                    <p class="text-center text-white text-lg md:text-xl lg:text-4xl px-4">Семена растут, мир процветает!</p>
                </div>
            </div>
            <div class="slide relative">
                <div class="slide-img">
                    <img class="object-cover w-full h-64 rounded-t-md" src="{{ asset('/img/wheat.png') }}" alt="slide">
                </div>
                <div class="slide-text absolute inset-0 flex items-center justify-center">
                    <p class="text-center text-white text-lg md:text-xl lg:text-4xl px-4">Соединить силу природы и заботу о людях, обеспечивая высококачественные зерновые культуры, а также созданием новых рабочих мест</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products py-3">
    <div class="container mx-auto">
        <h2 class="title py-6 text-center">Продукты</h2>
        <div class="products-items py-5 items-center flex justify-around">
            @forelse ($products as $product)
            <div class="product-item">
                <img class="product-img" src="{{ asset('storage').'/'.$product->image }}" alt="product">
                <h3 class="product-item-title pt-[10px]">{{ $product->name }}</h3>
                <p class="product-item-text py-[25px]">{{ substr($product->description, 0,40) }}...</p>
                <a href="{{ route('productDetails', $product->id) }}">Подробнее</a>
            </div>
            @empty
            <span>Пока здесь ничего нет...</span>
            @endforelse
        </div>
    </div>
</section>
@if($settings->where('alias', 'statistic')->first()->active)
<section class="numbers bg-gray-100 py-[30px]">
    <div class="container mx-auto">
        <h2 class="title text-center">Наш завод в цифрах</h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 xl:gap-16 xl:grid-cols-3 pt-5">
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[100px] pr-5">
                    <img class="number-img" src="{{ asset('/img/square.svg') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">10 000 га</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">Площадь пашни</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[100px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/count.svg') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">11 000 т</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">Было произведено в 2022 году.</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-lef w-[100px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/factory.svg') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">2 зернотока</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">10 000 тонн вместимость зернотоков</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[100px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/truck.svg') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">40 ед.</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5"> Сельхоз техники</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[100px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/rub.png') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">110 000 млн.</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">Основных средств организации.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if($settings->where('alias', 'about_us')->first()->active)
<section class="about mb-[25px]">
    <div class="container px-5 mx-auto">
        <h2 class="title">О нас</h2>
        <div class="about-items space-y-3 xl:grid xl:grid-cols-2 md:flex md:flex-col">
            <div class="column-left mr-[40px]">
                <p class="about-text">ООО "МОЛОЧНЫЙ ЗАВОД "КОРМИЛОВСКИЙ" является одной из старейших компаний в Омской области, занимающейся различными аспектами сельского хозяйства.
                    Компания занимается выращиванием однолетних культур, таких как зерновые (пшеница, ячмень, овес).Компания также предоставляет широкий спектр услуг в области растениеводства, включая консультационные услуги для фермеров, поставку сельхозтехники и производство и продажу семян различных культур.
                    В области животноводства компания специализируется на разведении молочного крупного рогатого скота, таких как коровы, и производстве сырого молока. Она обеспечивает высокое качество молока благодаря современным методам содержания и кормления животных.
                </p>
                <br>
                <p class="about-text">
                    ООО "МОЛОЧНЫЙ ЗАВОД "КОРМИЛОВСКИЙ" стремится к постоянному улучшению качества своей продукции и услуг, а также к развитию и сотрудничеству с другими участниками сельского хозяйства Омской области.
                </p>
            </div>
            <div class="column-right flex flex-col justify-center">
                <img class="max-w-full w-500 h-auto rounded-2xl" src="{{ asset('/img/завод.jpg') }}" alt="factory">
            </div>
        </div>
    </div>
</section>
@endif
@endsection
