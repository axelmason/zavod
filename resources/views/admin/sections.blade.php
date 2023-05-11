@extends('layouts.admin')
@section('content')
<div class="admin-content col-span-11 p-5">
    <h2 class="title">Секции</h2>
    <ul class="section-menu text-[24px]">
        @foreach ($settings as $setting)
                <form action="{{ route('admin.section.save', $setting->id) }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-10 space-y-3 items-center">
                        <li class="col-span-1 pr-2">{{ $setting->name }}</li>
                        <label class="col-span-1 toggle-checkbox flex">
                            <input name="alias" type="checkbox" @if($setting->active) checked @endif />
                            <span class="slider round"></span>
                        </label>
                        <button type="submit" class="col-span-1 text-green-400 text-lg">Сохранить</button>
                    </div>
                </form>
        @endforeach
    </ul>
</div>
@endsection
