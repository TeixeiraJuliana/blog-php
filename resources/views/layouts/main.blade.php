<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('./assets/style/base/global-base.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/module/global-module.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/theme/global-theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/reset/global-reset.css') }}" rel="stylesheet" type="text/css">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
       <div class="container">
            <nav class="header m-flex">
                <ul class="m-flex">
                @auth()
                <li><a href="/dashboard">dashboard</a></li>
                <form action="/logout" method="POST">
                    @csrf
                <li>
                    <a href="/logout"
                        onclick="event.preventDefault();this.closest('form').submit();">
                        Sair
                    </a>
                </li>
                </form>
                @endauth
                 @guest()
                 <li><a href="/login">Login</a></li>
                 <li><a href="/register">Cadastrar</a></li>

                 @endguest
                </ul>
            </nav>
            @auth()
            <div class="body-content m-flex">
                <h1>@yield('title')</h1>
                @if (session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
            <div class="footer">
                <p>Blog &copy;</p>
            </div>
            @endauth
       </div>
    </body>
</html>
