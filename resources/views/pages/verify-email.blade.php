@extends('layouts.base')

@section('title', 'VerifyEmail')

@section('content')

    <!-- VERIFY EMAIL -->

    <div  id="" class="flex flex-col justify-center items-center bg-whi-yellow h-screen font-poppins">
        <div class="items-end mb-6">
            <img class=" h-32" src="assets\logo_dashboard.svg" alt="logo"/>
        </div>

        <div class="items-start flex flex-col justify-center py-6 px-8 w-5/6 xl:w-2/6 lg:w-3/6 md:w-4/6 bg-bro-dark rounded-md shadow-lg">
            <div>
                <p class="font-medium text-justify text-lm text-whi-yellow">
                    Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de enviar outro.
                </p>
            </div>

            <div class="mb-4 font-medium text-sm text-whi-yellow" v-if="verificationLinkSent" >
                Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div class="mt-6 flex flex-col sm:flex-row items-center justify-around sm:space-x-6">
                    <button class="bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" type="submit">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Reenviar e-mail de verificação
                        </p>
                    </button>

                    {{-- <a :href="route('logout')" method="post" as="button" class="underline text-sm mt-4 sm:mt-0 text-whi-yellow font-semibold hover:text-gr-medium">Sair</a> --}}

                </div>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm mt-4 sm:mt-0 text-whi-yellow font-semibold hover:text-gr-medium">
                    {{ __('Log Out') }}
                </button>
            </form>
            <p class="mt-6 text-xs text-whi-yellow">
                Sobre o 
                <a class="text-whi-opaque" :href="route('welcome')">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>

    <!-- END RESEND EMAIL -->

@endsection