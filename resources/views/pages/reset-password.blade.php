@extends('layouts.base')

@section('title', 'ResetPassword')

@section('content')

    <!-- RESET PASSWORD -->

    <div id="content-block" class="flex flex-row justify-center items-center bg-whi-yellow h-screen font-poppins">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-3/6 md:w-4/6 h-4/5 bg-bro-dark rounded-r-md rounded-l-md shadow-lg">
            
            <p class="font-semibold text-3xl text-whi-yellow">
                Redefinir senha
            </p>  
            
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                
                <div class="mt-4">
                    <input id="password" type="password" placeholder="Senha" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <input id="password_confirmation" type="password" placeholder="Confirmar senha" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autocomplete="new-password" />
                </div>

                <button class="mt-4 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" type="submit">
                    <p class="text-whi-yellow font-semibold text-lg">
                        Confirmar
                    </p>
                </button>
            </form>
            <p class="mt-10 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque hover:text-gr-light" href="#">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>

    <!-- END RESET PASSWORD -->

@endsection