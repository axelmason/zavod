@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<section class="flex justify-center items-center py-5 ">
    <div class="w-full">
        <div class="slick relative">
            <div class="slide relative">
                <div class="slide-img">
                    <img class="object-cover w-full h-64" src="/img/wheat.png" alt="slide">
                </div>
                <div class="slide-text absolute inset-0 flex items-center justify-center">
                    <p class="text-center text-white text-lg md:text-xl lg:text-2xl px-4">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Sunt iste at laudantium, reprehenderit eligendi tempora doloremque cumque
                        numquam aspernatur aut quasi itaque ut consequuntur fugiat recusandae atque molestiae eius
                        suscipit!.</p>
                </div>
            </div>
            <div class="slide relative">
                <div class="slide-img">
                    <img class="object-cover w-full h-64 rounded-t-md" src="/img/wheat.png" alt="slide">
                </div>
                <div class="slide-text absolute inset-0 flex items-center justify-center">
                    <p class="text-center text-white text-lg md:text-xl lg:text-2xl px-4">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Sunt iste at laudantium, reprehenderit eligendi tempora doloremque cumque
                        numquam aspernatur aut quasi itaque ut consequuntur fugiat recusandae atque molestiae eius
                        suscipit!.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products py-[30px]">
    <div class="container">
        <h2 class="title text-center">Продукты</h2>
        <div class="products-items items-center flex justify-around">
            @forelse ($products as $product)
                <div class="product-item">
                    <img class="product-img" src="{{ asset('storage/'.$product->image) }}" alt="product">
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
        <div class="numbers-items pt-5 xl:grid xl:grid-cols-3 md:flex md:flex-col">
            <div class="numbers-item flex mb-5">
                <div class="number-left pr-5">
                    <img class="w-20" src="/img/горох.png" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title">999 999</h3>
                    <p class="numbers-text pt-[24px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="numbers-item flex mb-5">
                <div class="number-left pr-5">
                    <img class="w-20" src="/img/горох.png" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title">999 999</h3>
                    <p class="numbers-text pt-[24px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="numbers-item flex mb-5">
                <div class="number-left  pr-5">
                    <img class="w-20" src="/img/горох.png" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title">999 999</h3>
                    <p class="numbers-text pt-[24px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="numbers-item flex mb-5">
                <div class="number-left  pr-5">
                    <img class="w-20" src="/img/горох.png" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title">999 999</h3>
                    <p class="numbers-text pt-[24px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="numbers-item flex mb-5">
                <div class="number-left  pr-5">
                    <img class="w-20" src="/img/горох.png" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title">999 999</h3>
                    <p class="numbers-text pt-[24px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="numbers-item flex mb-5">
                <div class="number-left pr-5">
                    <img class="w-20" src="/img/горох.png" alt="">
                </div>
                <div class="number-right">
                    <h3 class="numbers-title">999 999</h3>
                    <p class="numbers-text pt-[24px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
</section>
<section class="about mb-[25px]">
    <div class="container">
        <h2 class="title">О нас</h2>
        <div class="about-items space-y-3 xl:grid xl:grid-cols-2 md:flex md:flex-col">
            <div class="column-left mr-[40px]">
                <p class="about-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laboriosam facere
                    iusto quis at unde beatae dolorem accusamus numquam est optio deserunt non doloribus atque error
                    natus pariatur, laborum ipsum?
                </p>
                <br>
                <p class="about-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laboriosam facere
                    iusto quis at unde beatae dolorem accusamus numquam est optio deserunt non doloribus atque error
                    natus pariatur, laborum ipsum?
                </p>
            </div>
            <div class="column-right flex justify-center">
                <img class="about-img" src="/img/завод.jpg" alt="factory">
            </div>
        </div>
    </div>
</section>
@endsection
