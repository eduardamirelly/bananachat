@extends('layouts.base')

@section('title', 'Register')

@section('content')

    <!-- REGISTER -->

    <div id="content-block" class="flex flex-row justify-center items-center bg-whi-yellow font-poppin h-screen font-poppins">

        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-3/6 md:w-4/6 h-4/5 bg-bro-dark rounded-r-md rounded-l-md shadow-lg">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <p class="font-semibold text-3xl text-whi-yellow">
                Entrar
            </p>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <input id="name" placeholder="Usuário" :value="old('name')" type="text" name="name" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus autocomplete="name" />
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
                    <button class="mt-4 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Register
                        </p>
                    </button>
                </div>

            </form>
            <p class="mt-10 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque hover:text-gr-light" href="#">
                    Banana Chat
                </a>
            </p>
        </div>
        
    </div>

    <!-- END REGISTER -->

@endsection