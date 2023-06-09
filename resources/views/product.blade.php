@extends('layouts.app')

@section('content')
    <section class="product py-5">
        <div class="container px-5 mx-auto">
            <h2 class="title py-5 text-center">Продукт</h2>
            <div class="product-items xl:grid xl:grid-cols-2 md:flex md:flex-col">
                <div class="column-left space-y-3">
                    <h2 class="about-text">Наименование: {{ $product->name }}</h2>
                    <p class="about-text">Описание: {{ $product->description }}</p>
                    <p class="about-text">Склад: {{ $product->warehouse->name }}</p>
                    @if ($product->document)
                    <p class="about-text">Документ: {{ last(explode('/', $product->document->path)) }}<a download href="{{ asset('storage/'.$product->document->path) }}" style="color: blue"> Скачать</a></p>
                    @endif
                </div>
                <div class="column-right flex flex-col justify-center">
                    @if ($product->image)
                        <img class="" src="{{ asset('storage/'.$product->image) }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
