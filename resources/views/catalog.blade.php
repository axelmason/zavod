@extends('layouts.app')

@section('content')

    <section class="catalog">
        <div class="container">
            <h2 class="title text-center">Продукция</h2>
            <div class="catalog-items mb-[50px] xl:grid xl:grid-cols-3 md:flex md:flex-col">
                @forelse ($products as $product)
                    <div class="catalog-item">
                        @if ($product->image)
                            <img class="catalog-img" src="{{ asset('storage/'.$product->image) }}" alt="product">
                        @endif
                        <h3 class="catalog-item-title pt-[10px]">{{ $product->name }}</h3>
                        <p class="catalog-item-text py-[25px]">{{ substr($product->description, 0, 20) }}</p>
                        <a href="{{ route('productDetails', $product->id) }}" style="color: blue">Подробнее</a>
                    </div>
                @empty
                    <p>Товаров пока нет...</p>
                @endforelse
            </div>
        </div>
    </section>
    @endsection
