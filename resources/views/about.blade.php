@extends('layouts.app')

@section('content')
    <section class="about">
        <div class="container px-5 mx-auto">
            <h2 class="title">О нас</h2>
            <div class="about-items  my-5 space-y-3 xl:grid xl:grid-cols-2 md:flex md:flex-col">
                <div class="column-left mr-[40px]">
                    <p class="about-text">Организация имеет свои собственные земельные угодья на которых выращивается зерно. Зерно затем перерабатывается на производстве, расположенном на территории поселков Кормиловка , Старомалиновка и используется для производства кормов для животных, таких как крупы, комбикорма, силос и др.</p>
                    <br>
                    <p class="about-text">ООО "МОЛОЧНЫЙ ЗАВОД "КОРМИЛОВСКИЙ" является одним из крупнейших производителей кормов для животных в Омской области. Кроме того, компания занимается и другими видами деятельности, такими как поставки сельхозтехники, консультационные услуги для фермеров, производство и продажа семян и другие.</p>
                    <br>
                    <p class="about-text"> Организация активно развивается и ведет сотрудничество с многими крупными предприятиями и организациями в регионе и за его пределами.</p>
                    </p>
                </div>
                <div class="column-right flex flex-col justify-center">
                    <img class="max-w-full w-500 h-auto rounded-2xl" src="{{ asset('/img/завод.jpg') }}" alt="factory">
                </div>
            </div>
            <div class="gallery">
                <h2 class="title text-center">Фотографии производства</h2>
                <div class="gallery-images flex flex-col space-y-5 my-5 items-center">
                    <img src="{{ asset('img/zavod.jpg') }}" alt="">
                    <img src="{{ asset('img/zavod2.jpg') }}" alt="">
                    <img src="{{ asset('img/zavod3.jpg') }}" alt="">
                    <img src="{{ asset('img/zavod4.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection
