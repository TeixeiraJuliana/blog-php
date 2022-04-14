<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('./assets/style/layout/global-layout.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/base/global-base.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/base/b-dashboard.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/base/b-form.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/module/global-module.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/module/m-dashboard.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/module/m-form.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/theme/global-theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/responsiveness/global-responsiveness.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/reset/global-reset.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/state/global-state.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/responsiveness/r-login-register.css') }}" rel="stylesheet" type="text/css">
        <title>Blog</title>
    </head>
    <body class="antialiased">
        @auth()
        <div id="app">
            <nav id="header">
                <ul>
                    <li><a href="/">dashboard</a></li>
                    <li><a href="/post/create">Cadastrar artigo</a></li>
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
                </ul>
            </nav>
            @auth()
            <div class="container">
                <h1>@yield('title')</h1>
                @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
            <div id="footer">
                <p>Blog &copy;</p>
            </div>
        @endauth
       </div>
    </body>
</html>
