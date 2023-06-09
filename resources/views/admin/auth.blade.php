<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Авторизация</title>
</head>

<body>
    <div class="auth">
        <div class="auth-conatiner">
            <h2 class="title text-center">Авторизация</h2>
            <form class="auth-form" action="{{ route('admin.auth') }}" method="POST">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p style="color: red;">{{ $error }}</p>
                    @endforeach
                @endif
                @csrf
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Войти</button>
            </form>
        </div>
    </div>
</body>

</html>
