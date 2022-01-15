@extends('layouts.base')

@section('title', 'ForgotPassword')

@section('content')

    <!-- FORGOT PASSWORD -->

    <div id="content-block" class="flex flex-row justify-center items-center bg-whi-yellow h-screen font-poppins">

        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-3/6 md:w-4/6 h-4/5 bg-bro-dark rounded-r-md rounded-l-md shadow-lg">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <p class="font-semibold text-3xl text-whi-yellow">
                Verificação de E-mail
            </p>    

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                
                <p class="font-regular text-sm text-justify mt-6 text-whi-yellow">
                    Verifique seu email para autorizar a redefinição de senha
                </p>

                <div>
                    <input id="email" placeholder="E-mail" type="email" name="email" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus />
                </div>

                <div class="flex items-center mt-4">
                    <button class="bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Confirmar
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

    <!-- END FORGOT PASSWORD -->

@endsection