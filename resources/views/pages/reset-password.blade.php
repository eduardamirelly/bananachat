@extends('layouts.base')

@section('title', 'Resetar Senha')

@section('content')

    <!-- RESET PASSWORD -->
    <div class="block-fluid container mx-auto min-w-min px-4 py-12 sm:px-8 flex flex-col justify-center items-center">
        <div class="w-32 mb-8">
            <img src="{{ asset('assets/logo.svg') }}" alt="logo">
        </div>
        <div class="bg-bro-dark w-full sm:w-11/12 md:w-9/12 xl:w-5/12 px-6 py-8 sm:p-10 rounded-sm shadow-md">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <p class="mb-6 font-semibold text-3xl text-whi-yellow">
                Digite a sua nova senha
            </p>
            
            <!-- FORM RESET PASSWORD -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                
                <div>
                    <input id="email" type="email" name="email" :value="old('email', $request->email)" placeholder="Email" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus />
                </div>

                <div class="mt-4">
                    <input id="password" type="password" placeholder="Senha" name="password" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmar senha" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="new-password" />
                </div>

                <div class="mt-4 justify-start">
                    <button class="bg-bro-medium py-3 px-12 xs:px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Resetar Senha
                        </p>
                    </button>
                </div>
            </form>

            <p class="mt-8 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque hover:text-gr-light" href="{{ route('index') }}">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>

@endsection