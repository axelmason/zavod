@extends('layouts.app')

@section('title', 'Список продуктов')

@section('content')
<div class="container">
    <h2 class="title">Админ-панель</h2>
    <a href="{{ route('admin.products.createPage') }}" class="btn-edit">+ Добавить</a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Описание</th>
                    <th>Изображение</th>
                    <th>Документы</th>
                    <th>Время добавления</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td style="padding: 1em 0">{{ $product->name }}</td>
                        <td>{{ substr($product->description, 0, 20) }}</td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/'.$product->image) }}" alt="" style="max-width: 200px">
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            @if ($product->document)
                                {{ last(explode('/', $product->document->path)) }}<a download href="{{ asset('storage/'.$product->document->path) }}"> Скачать</a>
                            @else
                                -
                            @endif
                        </td>
                        <td>{{ $product->created_at ?? '-' }}</td>
                        <td>
                            <a href="{{ route('admin.products.editPage', $product->id) }}" class="btn-edit">Редактировать</a>
                            <a href="{{ route('admin.products.delete', $product->id) }}" class="btn-delete">Удалить</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" align="center"><i>Продуктов ещё нет...</i></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
