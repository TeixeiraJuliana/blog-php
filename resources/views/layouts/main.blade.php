<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('./assets/style/base/global-base.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/global-leyout.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/module/global-module.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/reset/global-reset.css') }}" rel="stylesheet" type="text/css">
        <link href="{{asset('./assets/style/theme/global-theme.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="antialiased">
        <nav class="header">
            <ul>
                <li><a href="/post/create">Criar Artigo</a></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </nav>
        <div class="container">
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
             @yield('content')
        </div>
        <div class="footer">
            <h1>Footer</h1>
        </div>
    </body>
</html>
