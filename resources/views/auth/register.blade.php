@extends('layouts.main')

        <validation-errors class="mb-4" />
<div class="container m-flex log-reg">
    <div class="m-card-log-reg m-flex">
        <div class="card-conteiner-left  m-flex">
        </div>
        <div class="card-conteiner-right  m-flex">
            <div class="box-log-reg m-flex">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="item-log-reg m-flex">
                        <label  for="name" value="{{ __('Name') }}">Nome</label>
                        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="item-log-reg m-flex">
                        <label for="email" value="{{ __('Email') }}" >E-mail</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="item-log-reg m-flex">
                        <label for="password" value="{{ __('Password') }}" >Senha</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="item-log-reg m-flex">
                        <label for="password_confirmation" value="{{ __('Confirm Password') }}" >Confirme a senha</label>
                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="">
                            <label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </label>
                        </div>
                    @endif

                    <div class="footer-log-reg m-flex">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            <p>{{ __('Already registered?') }}</p>
                        </a>

                        <button class="btn max">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
