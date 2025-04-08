<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <p>
            @if(auth()->check())
                <a href="{{ route('logout') }}">Wyloguj sie</a>
            @else
                <a href="{{ route('login') }}">Zaloguj sie</a>
            @endif
        </p>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>