@extends('layouts.app')

@section('title', 'Создать продукт')

@section('content')
<div class="container">
    <h2 class="title">Создание продукта</h2>
    <form action="{{ route('admin.products.create') }}" class="create-form" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Наименование:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Описание:</label>
        <textarea id="description" name="description" rows="5" required></textarea>

        <label for="image">Изображение:</label>
        <input type="file" id="image" name="image" accept="image/*">

        <label for="document">Документ:</label>
        <input type="file" id="document" name="document" accept=".pdf,.doc,.docx">

        <label for="warehouse_id">Склад:</label>
        <select id="warehouse_id" name="warehouse_id" required>
            <option value="" disabled selected>Выберите склад</option>
            @foreach ($warehouses as $wh)
                <option value="{{ $wh->id }}">{{ $wh->name }}</option>
            @endforeach
        </select>

        <button type="submit">Создать продукт</button>
    </form>
</div>
@endsection
