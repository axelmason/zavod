@extends('layouts.app')

@section('content')
    <section class="partners py-[30px]">
        <div class="container">
            <h2 class="title text-center">Наши партнеры</h2>
            <h2 class="title text-center pt-3">Поставщики</h2>
            <div class="partners-items items-center place-items-center pt-5 xl:grid xl:justify-center xl:grid-cols-3 md:flex md:flex-col">
                <div class="partner-item">
                    <img class="product-img" src="{{ asset('/img/agro-complect.png') }}" alt="">
                    <h3>АО БАЗА АГРОКОМПЛЕКТ</h3>
                </div>
                <div class="partner-item">
                    <img class="product-img" src="{{ asset('/img/LogoAgromaster.png') }}" alt="">
                    <h3>ООО "АГРО-МАСТЕР"</h3>
                </div>
                <div class="partner-item">
                    <img src="{{ asset('/img/default.png') }}" alt="">
                    <h3>ОАО "СЕМИРЕЧЕНСКАЯ БАЗА СНАБЖЕНИЯ"</h3>
                </div>
            </div>
            <h2 class="title text-center pt-5">Покупатели</h2>
            <div class="partners-items items-center place-items-center pt-5 xl:grid xl:justify-center xl:grid-cols-3 md:flex md:flex-col">
                <div class="partner-item">
                    <img class="product-img" src="{{ asset('/img/default.png') }}" alt="">
                    <h3>ООО "БЛАГО-ОМСК"</h3>
                </div>
                <div class="partner-item">
                    <img class="product-img" src="{{ asset('/img/default.png') }}" alt="">
                    <h3>ООО "ЛКЗ"</h3>
                </div>
                <div class="partner-item">
                <img class="product-img" src="{{ asset('/img/default.png') }}" alt="">
                    <h3>ООО "АГРОТРЕЙД"</h3>
                </div>
            </div>
    </section>
@endsection
