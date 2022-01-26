
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- including -->
    </head>
    <body>
        <nav>Nav
        <a href="/">Home</a>
        <a href="/services/">Услуги</a>
        @if (Auth::guest())
            <a href="/registration">Регистрация</a>
            <a href="/login">Войти</a>
        @else
            <a href="/logout">Выйти</a>
        @endif
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>