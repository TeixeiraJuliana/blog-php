@extends('layouts.main')
<div class="container m-flex log-reg">
    <div class="m-card-log-reg  m-flex">
        <div class="card-conteiner-left  m-flex">
            <img src="./assets/image/busines.jpg" alt="">
        </div>
        <div class="card-conteiner-right  m-flex">

            <div class="box-log-reg m-flex">
                <h1>Login</h1>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="item-log-reg m-flex">
                        <label ffor="email" value="{{ __('Email') }}">E-mail</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="item-log-reg m-flex">
                        <label for="for="password" value="{{ __('Password') }}"></label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div>
                        <label for="remember_me">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span>{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="footer-log-reg m-flex">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <button class="btn max">  {{ __('Log in') }}</button>
                        <p><a href="/register">Registrar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
