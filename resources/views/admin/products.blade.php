@extends('layouts.admin')
@section('content')
    <div class="admin-content col-span-11 p-5">
        <h2 class="title">Товары</h2>
        <a href="{{ route('admin.products.createPage') }}" class="bg-blue-300 rounded px-3 py-1 hover:bg-blue-500 transition">+ Добавить</a>
        <div class="overflow-x-auto py-5">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Наименование</th>
                            <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Категория</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Описание
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Склад
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Документ
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Изображение</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Действия
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($products as $p)
                    <tr class="align-middle">
                        <td class="px-6 py-4 whitespace-nowrap align-middle">{{ $p->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap align-middle">
                            @if ($p->category)
                            {{ $p->category->name }}
                        @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap align-middle">{{ $p->description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap align-middle">{{ $p->warehouse->name ?? "-" }}</td>
                        <td class="px-6 py-4 whitespace-nowrap h-full">
                            @if ($p->document)
                                <div>{{ last(explode('/', $p->document->path)) }} <br><a download href="{{ asset('storage/'.$p->document->path) }}" class="text-blue-700"> Скачать</a></div>
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap align-middle">
                            @if ($p->image)
                                <img src="{{ asset('storage/'.$p->image) }}" alt="" style="max-width: 100px">
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('admin.products.editPage', $p->id) }}"><i class="fa-sharp text-blue-500 fa-solid fa-pen px-3"></i></a>
                            <a href="{{ route('admin.products.delete', $p->id) }}"><i class="fa-sharp text-red-500 fa-solid fa-trash px-3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
