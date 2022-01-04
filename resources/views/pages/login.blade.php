@extends('layouts.base')

@section('title', 'Login')

@section('content')

    <!-- LOGIN -->

    <div id="content-block" class="flex flex-row justify-center items-center bg-ye-light h-screen font-poppins">

        <div class="content w-2/6 h-4/5 lg:shadow-lg hidden lg:block">
            <img src="/assets/banana-min.jpg" class="w-full rounded-l-md object-cover h-full">
        </div>

        
        <!-- Login container -->
        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-2/6 md:w-4/6 h-4/5 bg-bro-dark rounded-r-md rounded-l-md lg:rounded-r-md lg:rounded-l-none shadow-lg">

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <p class="font-semibold text-3xl text-whi-yellow">
                Entrar
            </p>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div> <!-- Email -->
                    <input id="email" placeholder="Usuário ou e-mail" type="email" name="email" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus />
                </div>
                <div> <!-- Senha -->
                    <input id="password" placeholder="Senha" type="password" name="password" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="current-password" />
                </div>
                <div class="justify-start">
                    <button class="mt-4 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Login
                        </p>
                    </button>
                    <p class="mt-6 text-whi-yellow text-sm">
                        Não tem conta? 
                        <a class="text-whi-opaque" href="{{ route('register') }}">
                                Registre-se
                        </a>
                    </p>

                    {{-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif --}}

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
                <a class="text-whi-opaque hover:text-gr-light" href="#">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>

    <!-- END LOGIN -->

@endsection