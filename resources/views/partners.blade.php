@extends('layouts.app')

@section('content')
    <section class="partners py-[30px]">
        <div class="container mx-auto">
            <h2 class="title text-center">Наши партнеры</h2>
            <h2 class="title text-center pt-3">Поставщики</h2>
            <div class="partners-items space-y-5 px-20 place-items-center pt-3 xl:grid xl:justify-center xl:grid-cols-3 md:flex md:flex-col">
                <div class="partner-item">
                    <img class="product-img" src="{{ asset('/img/agro-complect.png') }}" alt="">
                </div>
                <div class="partner-item">
                    <img class="product-img" src="{{ asset('/img/LogoAgromaster.png') }}" alt="">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('/img/semibase.png') }}" alt="">
                </div>
            </div>
            <h2 class="title text-center pt-5">Покупатели</h2>
            <div class="partners-items space-y-5 px-20 place-items-center pt-3 xl:grid xl:justify-center xl:grid-cols-3 md:flex md:flex-col">
                <div class="partner-item">
                    <img src="{{ asset('/img/logo_blago.svg') }}" alt="">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('/img/default.png') }}" alt="">
                    <h3>ООО "ЛКЗ"</h3>
                </div>
                <div class="partner-item">
                <img src="{{ asset('/img/default.png') }}" alt="">
                    <h3>ООО "АГРОТРЕЙД"</h3>
                </div>
            </div>
    </section>
@endsection
