@extends('layouts.main')
<div class="container">
    <div class="content-mold">
        <div class="box">
            <div class="left">
                <img src="./assets/image/busines.jpg" alt="">
            </div>
            <div class="right light">
                <div class="box">
                    <div class="card-form">
                        <h1>Login</h1>
                        <x-jet-validation-errors />

                        @if (session('status'))
                            <div>
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="item-form">
                                <label for="email" value="{{ __('Email') }}">E-mail</label>
                                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="item-form">
                                <label for="password" value="{{ __('Password') }}">Senha</label>
                                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="card-form-footer">
                                <label for="remember_me">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span>{{ __('Remember me') }}</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                <button>  {{ __('Log in') }}</button>
                                <p><a href="/register">Registrar</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
