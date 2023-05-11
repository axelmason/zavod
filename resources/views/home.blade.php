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
                    <p class="text-center text-white text-lg md:text-xl lg:text-4xl px-4">Девиз компании!</p>
                </div>
            </div>
            <div class="slide relative">
                <div class="slide-img">
                    <img class="object-cover w-full h-64 rounded-t-md" src="{{ asset('/img/wheat.png') }}" alt="slide">
                </div>
                <div class="slide-text absolute inset-0 flex items-center justify-center">
                    <p class="text-center text-white text-lg md:text-xl lg:text-4xl px-4">Девиз компании!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products py-[30px]">
    <div class="container items-center">
        <h2 class="title text-center">Продукты</h2>
        <div class="products-items items-center flex justify-around">
            @forelse ($products as $product)
            <div class="product-item">
                <img class="product-img" src="{{ asset('storage').'/'.$product->image }}" alt="product">
                <h3 class="product-item-title pt-[10px]">{{ $product->name }}</h3>
                <p class="product-item-text py-[25px]">{{ substr($product->description, 0, 20) }}</p>
                <a href="{{ route('productDetails', $product->id) }}" style="color: blue">Подробнее</a>
            </div>
            @empty
            <span>Пока здесь ничего нет...</span>
            @endforelse
        </div>
    </div>
</section>
<section class="numbers py-[30px]">
    <div class="container">
        <h2 class="title">Наш завод в цифрах</h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 xl:gap-16 xl:grid-cols-3 pt-5">
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[75px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/square.svg') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">10 000 га</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">Площадь пашни</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[75px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/default.png') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">11 000 т</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">Было произведено в 2022 году.</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[75px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/factory.svg') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">2 зернотока</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5">10 000 тонн вместимость зернотоков</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[75px] pr-5">
                    <img class="number-img w-full" src="{{ asset('/img/truck.png') }}" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title text-center md:text-left">40 ед.</h3>
                    <p class="numbers-text text-center md:text-left pt-3 md:pt-5"> Сельхоз техники</p>
                </div>
            </div>
            <div class="numbers-item gap-y-5 flex flex-col items-center md:items-start">
                <div class="number-left w-[75px] pr-5">
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
<section class="about mb-[25px]">
    <div class="container">
        <h2 class="title">О нас</h2>
        <div class="about-items space-y-3 xl:grid xl:grid-cols-2 md:flex md:flex-col">
            <div class="column-left mr-[40px]">
                <p class="about-text">ООО "МОЛОЧНЫЙ ЗАВОД "КОРМИЛОВСКИЙ" является одним из крупнейших производителей кормов для животных в Омской области. Кроме того, компания занимается и другими видами деятельности, такими как поставки сельхозтехники, консультационные услуги для фермеров, производство и продажа семян и другие.
                </p>
                <br>
                <p class="about-text">
                ООО "МОЛОЧНЫЙ ЗАВОД "КОРМИЛОВСКИЙ" активно развивается и ведет сотрудничество с многими крупными предприятиями и организациями в регионе и за его пределами. Компания также уделяет внимание экологическим аспектам производства и использует современные технологии, которые позволяют сократить негативное воздействие на окружающую среду.
                </p>
            </div>
            <div class="column-right flex justify-center">
                <img class="about-img" src="{{ asset('/img/завод.jpg') }}" alt="factory">
            </div>
        </div>
    </div>
</section>
@endsection