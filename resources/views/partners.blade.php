@extends('layouts.app')

@section('content')
    <section class="partners py-[30px]">
        <div class="container">
            <h2 class="title text-center">Наши партнеры</h2>
            <div class="partners-items items-center place-items-center pt-5 xl:grid xl:justify-center xl:grid-cols-3 md:flex md:flex-col">
                <div class="partner-item">
                    <img src="{{ asset('/img/default.png') }}" alt="">
                    <h3>Партнер</h3>
                </div>
                <div class="partner-item">
                    <img src="{{ asset('/img/default.png') }}" alt="">
                    <h3>Партнер</h3>
                </div>
                <div class="partner-item">
                    <img src="{{ asset('/img/default.png') }}" alt="">
                    <h3>Партнер</h3>
                </div>
            </div>
    </section>
@endsection
