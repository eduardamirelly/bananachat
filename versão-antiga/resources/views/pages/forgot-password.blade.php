@extends('layouts.base')

@section('title', 'ForgotPassword')

@section('content')

    <!-- FORGOT PASSWORD -->

    <div id="content-block" class="flex flex-row justify-center items-center bg-ye-light h-screen font-poppins">

        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-2/6 md:w-4/6 h-4/5 bg-bro-dark rounded-l-md lg:rounded-l-md lg:rounded-r-none shadow-lg">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <p class="font-semibold text-3xl text-whi-yellow">
                Verificação de E-mail
            </p>    

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                
                <p class="font-regular text-sm text-justify mt-6 text-whi-yellow">
                    Verifique seu email para autorizar a redefinição de senha
                </p>

                <div>
                    <input id="email" placeholder="E-mail" type="email" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" required autofocus />
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

        <div class="content w-2/6 h-4/5 lg:shadow-lg hidden lg:block">
            <img src="/assets/banana-min.jpg" class="w-full rounded-r-md object-cover h-full">
        </div>
    </div>

    <!-- END FORGOT PASSWORD -->

@endsection