@extends('layouts.app')

@section('content')
    <section class="contacts my-[50px]">
        <div class="container px-5 mx-auto">
            <h2 class="title text-center">Контакты</h2>
            <div class="flex flex-col space-y-3 xl:grid xl:grid-cols-2 md:flex md:flex-col">
                <div class="column-left space-y-2">
                    <h2 class="font-bold">
                        Полное название организации:
                    </h2>
                    <p>ООО "Молочный завод Кормиловский"</p>
                    <p class="font-bold">Адрес:</p>
                    <p>646970, Омская обл., Кормиловский район, рабочий пос. Кормиловка, ул. Заводская, д. 15</p>
                    <p class="font-bold">Email:</p>
                    <p><a href="mailto:" class="underline">mzkbuh@yandex.ru</a></p>
                    <p class="font-bold">Руководитель:</p>
                    <p>Ширин Сергей Владимирович, генеральный директор</p>
                </div>

                <div class="column-right">
                    <iframe class="rounded" style="max-width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2288.5965865351745!2d74.0803406!3d54.997706699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43aa8e14728878a3%3A0x4908e27c6b975b33!2z0JfQsNCy0L7QtNGB0LrQsNGPINGD0LsuLCAxNSwg0JrQvtGA0LzQuNC70L7QstC60LAsINCe0LzRgdC60LDRjyDQvtCx0LsuLCA2NDY5NzA!5e0!3m2!1sru!2sru!4v1680954096930!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
