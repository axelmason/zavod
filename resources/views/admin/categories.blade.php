@extends('layouts.admin')
@section('content')
<div class="admin-content col-span-11 p-5">
    <h2 class="title">Категория</h2>
    <form class="p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="name" class="block text-gray-700 font-bold mb-2">Наименование</label>
            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
          </div>
        </div>
        <div class="mt-4">
          <button type="submit" class="bg-[#F6C000] hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Отправить</button>
        </div>
      </form>
      <div class="overflow-x-auto py-5">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Наименование</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Действия</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">Category 1</td>
              <td class="px-6 py-4 whitespace-nowrap"><a href="#"><i class="fa-sharp text-red-500 fa-solid fa-trash px-3"></i></a><a href="#"><i class="fa-sharp text-blue-500 fa-solid fa-pen px-3"></i></a></td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Category 1</td>
                <td class="px-6 py-4 whitespace-nowrap"><a href="#"><i class="fa-sharp text-red-500 fa-solid fa-trash px-3"></i></a><a href="#"><i class="fa-sharp text-blue-500 fa-solid fa-pen px-3"></i></a></td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">Category 1</td>
                <td class="px-6 py-4 whitespace-nowrap"><a href="#"><i class="fa-sharp text-red-500 fa-solid fa-trash px-3"></i></a><a href="#"><i class="fa-sharp text-blue-500 fa-solid fa-pen px-3"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
@endsection
