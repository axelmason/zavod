@extends('layouts.app')

@section('title', 'Обновить продукт')

@section('content')
<div class="container">
    <h2 class="title">Создание продукта</h2>
    <form action="{{ route('admin.products.edit', $product->id) }}" class="edit-form" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Наименование:</label>
        <input type="text" id="name" name="name" required value="{{ $product->name }}">

        <label for="description">Описание:</label>
        <textarea id="description" name="description" rows="5" required>{{ $product->description }}</textarea>

        <label for="image">Изображение:</label>
        @if ($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" alt="" style="max-width: 200px; text-align: center">
            <br>
            <span>Выбрать новый</span>
        @endif
        <input type="file" id="image" name="image" accept="image/*">


        <label for="document">Документ:</label>
        @if ($product->document)
            <span>{{ last(explode('/', $product->document->path)) }}<a download href="{{ asset('storage/'.$product->document->path) }}"> Скачать</a></span>
            <br>
            <span>Выбрать новый</span>
        @endif
        <input type="file" id="document" name="document" accept=".pdf,.doc,.docx">

        <label for="warehouse_id">Склад:</label>
        <select id="warehouse_id" name="warehouse_id" required>
            <option value="" disabled>Выберите склад</option>
            @foreach ($warehouses as $wh)
                <option value="{{ $wh->id }}" @if($wh->id == $product->warehouse_id) selected @endif>{{ $wh->name }}</option>
            @endforeach
        </select>

        <button type="submit">Обновить продукт</button>
    </form>
</div>
@endsection
