@extends('layouts.base')

@section('title', 'Cadastro')

@section('content')

    <!-- REGISTER -->
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
                Cadastro
            </p>
            
            <!-- FORM REGISTER -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div>
                    <input id="name" placeholder="Nickname" :value="old('name')" type="text" name="name" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <input id="email" placeholder="E-mail" type="email" name="email" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required />
                </div>

                <div class="mt-4">
                    <input id="password" placeholder="Senha" type="password" name="password" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <input id="password_confirmation" placeholder="Confirmar Senha" type="password" name="password_confirmation" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="new-password" />
                </div>

                <div class="justify-start">
                    <button class="mt-4 bg-bro-medium py-3 px-12 xs:px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Registrar
                        </p>
                    </button>
                    <p class="mt-6 text-whi-yellow font-regular text-sm">
                        Já tem conta? 
                        <a class="text-whi-opaque" href="{{ route('login') }}">
                            Login
                        </a>
                    </p>
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