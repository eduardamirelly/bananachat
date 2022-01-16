@extends('layouts.base')

@section('title', 'Login')

@section('content')

    <!-- LOGIN -->
    <div class="block-fluid container mx-auto min-w-min px-4 py-12 sm:px-8 flex flex-col justify-center items-center">
        <div class="w-32 mb-8">
            <img src="{{ asset('assets/logo.svg') }}" alt="logo">
        </div>
        <div class="bg-bro-dark w-full sm:w-11/12 md:w-9/12 xl:w-5/12 px-6 py-8 sm:p-10 rounded-sm shadow-md">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <p class="font-semibold text-3xl text-whi-yellow">
                Entrar
            </p>
            
            <!-- FORM LOGIN -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div>
                    <input id="email" placeholder="Usuário ou e-mail" type="email" name="email" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus />
                </div>
                <div>
                    <input id="password" placeholder="Senha" type="password" name="password" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="current-password" />
                </div>
                <div class="justify-start">
                    <button class="mt-4 bg-bro-medium py-3 px-12 xs:px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Login
                        </p>
                    </button>
                    <p class="mt-6 text-whi-yellow font-regular text-sm">
                        Não tem conta? 
                        <a class="text-whi-opaque" href="{{ route('register') }}">
                            Registre-se
                        </a>
                    </p>

                    @if (Route::has('password.request'))
                        <p class="mt-3 text-whi-yellow text-sm">
                            Esqueceu sua senha? 
                            <a class="text-whi-opaque" href="{{ route('password.request') }}">
                                Clique aqui
                            </a>
                        </p>
                    @endif
                </div>
            </form>

            <p class="mt-10 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque hover:text-gr-light" href="{{ route('index') }}">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>

@endsection