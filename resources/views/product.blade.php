@extends('layouts.app')

@section('content')
    <section class="product my-[50px]">
        <div class="container">
            <h2 class="title text-center">Продукт</h2>
            <div class="product-items xl:grid xl:grid-cols-2 md:flex md:flex-col">
                <div class="column-left">
                    <h2 class="name">{{ $product->name }}</h2>
                    <p class="desc">{{ $product->description }}</p>
                    <p class="warehouse">Склад: {{ $product->warehouse->name }}</p>
                    @if ($product->document)
                        Документ: {{ last(explode('/', $product->document->path)) }}<a download href="{{ asset('storage/'.$product->document->path) }}" style="color: blue"> Скачать</a>
                    @endif
                </div>
                <div class="column-right">
                    @if ($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="" style="max-width: 200px">
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
