@extends('layouts.app')

@section('content')
<section class="catalog h-[90vh]">
        <div class="container px-20 mx-auto">
            <h2 class="title text-center">Продукция</h2>
            <div class="catalog-items place-items-center mb-[50px] xl:grid xl:grid-cols-3 md:flex md:flex-col">
                @forelse ($products as $product)
                    <div class="catalog-item">
                        @if ($product->image)
                            <img class="catalog-img" src="{{ asset('storage/'.$product->image) }}" alt="product">
                        @endif
                        <h3 class="catalog-item-title pt-[10px]">{{ $product->name }}</h3>
                        <p class="catalog-item-text py-[25px]">{{ ($product->description) }}</p>
                        <a class="text-lg" href="{{ route('productDetails', $product->id) }}">Подробнее</a>
                    </div>
                @empty
                    <p>Товаров пока нет...</p>
                @endforelse
            </div>
        </div>
</section>
@endsection
