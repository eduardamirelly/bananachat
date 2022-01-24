@extends('layouts.base')

@section('title', 'Verificar E-mail')

@section('content')

    <!-- VERIFY E-MAIL -->
    <div class="block-fluid container mx-auto min-w-min px-4 py-12 sm:px-8 flex flex-col justify-center items-center">
        <div class="w-32 mb-8">
            <img src="{{ asset('assets/logo.svg') }}" alt="logo">
        </div>
        <div class="bg-bro-dark w-full sm:w-11/12 md:w-9/12 xl:w-5/12 px-6 py-8 sm:p-10 rounded-sm shadow-md">

            <p class="mb-6 font-semibold text-3xl text-whi-yellow">
                Verificação de E-mail
            </p>

            <div class="w-full">
                <div class="mt-4 mb-2">
                    <p class="text-sm text-justify text-whi-yellow">
                        Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de enviar outro.
                    </p>
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <!-- FORM VERIFY E-MAIL -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    
                    <div class="mt-4 justify-start">
                        <button class="bg-bro-medium w-full py-3 px-12 xs:px-14 rounded-md hover:bg-gr-medium" type="submit">
                            <p class="text-whi-yellow font-semibold text-lg">
                                Reenviar e-mail de verificação
                            </p>
                        </button>
                    </div>
                </form>

                <!-- FORM VERIFY E-MAIL -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="mt-4 justify-start">
                        <button class="bg-bro-medium w-full py-3 px-12 xs:px-14 rounded-md hover:bg-gr-medium" type="submit">
                            <p class="text-whi-yellow font-semibold text-lg">
                                Logout
                            </p>
                        </button>
                    </div>
                </form>
            </div>

            <p class="mt-8 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque hover:text-gr-light" href="{{ route('index') }}">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>

@endsection