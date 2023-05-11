<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="flex items-center justify-between p-5">
        <div class="logo flex items-center">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-[75px]">
        </div>
        <i class="fas fa-bars menu-icon md:hidden"></i>
        <i class="fas fa-times close-menu-icon hidden"></i>
        <nav class="menu hidden">
            <ul>
                <li><a href="./index.html"><i class="fa-solid text-gray-500 hover:text-[#F6C000] fa-box p-3"></i></a>
                </li>
                <li><a href="./warehouse.html"><i
                            class="fa-solid text-gray-500 hover:text-[#F6C000] fa-warehouse p-3"></i></a></li>
                <li><a href="./category.html"><i
                            class="fa-solid text-gray-500 hover:text-[#F6C000] fa-list p-3"></i></a></li>
                <li><a href="./sections.html"><i
                            class="fa-solid fa-section text-gray-500 hover:text-[#F6C000] p-3"></i></a></li>
            </ul>
        </nav>
        <div class="flex flex-col sm:flex-row">
            <div class="mr-4 admin-profile">
                <i class="fa-solid fa-user"></i>
                <a href="#" class="font-medium">Admin</a>
            </div>
            <a href="#" class="font-medium text-red-500"><i
                    class="fa-solid fa-right-from-bracket px-1"></i>Logout</a>
        </div>
    </header>
    <section class="admin">
        <div class="wrapper grid grid-cols-12  h-[100vh]">
            <div class="admin-panel hidden md:block  col-span-1 bg-gray-200">
                <ul class="admin-menu text-[32px] flex flex-col">
                    <li><a href="{{ route('admin') }}"><i class="fa-solid text-gray-500 hover:text-[#F6C000] fa-box p-3"></i></a></li>
                    <li><a href="{{ route('admin.warehouse.list') }}"><i class="fa-solid text-gray-500 hover:text-[#F6C000] fa-warehouse p-3"></i></a></li>
                    {{-- <li><a href="{{ route('categories') }}"><i class="fa-solid text-gray-500 hover:text-[#F6C000] fa-list p-3"></i></a></li> --}}
                    <li><a href="{{ route('admin.section.list') }}"><i class="fa-solid fa-section text-gray-500 hover:text-[#F6C000] p-3"></i></a></li>
                </ul>
            </div>
            @yield('content')
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="{{ asset('burger.js') }}"></script>
</body>
</html>