@extends('layouts.base')

@section('title', 'Chat')

@section('content')

    <!-- CHAT DASHBOARD -->
    <div id="chat" class="flex w-full">

        <!-- SIDEBAR -->
        <div id="sidebar" class="sidebar bg-bro-dark">
            {{-- contact indicator --}}
            <div class="mt-12 ml-4 flex">
                <a href=""><img src="assets/arrow-left.png" alt="left arrow" class="h-6"></a>
                <h3 class="ml-2 poppins font-medium text-whi-yellow">Dados do contato</h3>
            </div>
            {{-- photo --}}
            <div class="flex justify-center mt-8">
                <img class="rounded-full w-44 h-44" src="https://suap.ifrn.edu.br/media/alunos/219829.5SDnHZVdjC7W.jpg" alt="profile-dev">
            </div>
            {{-- name --}}
            <div class="flex justify-center mt-8">
                <div class="shadow-2xl w-10/12 h-16">
                    <div class="mt-2 ml-2 mr-2">
                        <p class="poppins text-xs font-normal text-whi-yellow">Nome</p>
                    </div>
                    <div class="flex justify-between mt-2 ml-2 mr-2">
                        <p class="poppins text-sm font-normal text-ye-light">João Vitor</p>
                    </div>
                </div>
            </div>
            {{-- description --}}
            <div class="flex justify-center mt-4">
                <div class="shadow-2xl w-10/12 h-16">
                    <div class="mt-2 ml-2 mr-2">
                        <p class="poppins text-xs font-normal text-whi-yellow">Bio</p>
                    </div>
                    <div class="flex justify-between mt-2 ml-2 mr-2">
                        <p class="poppins text-sm font-normal text-ye-light">Descrição</p>
                    </div>
                </div>
            </div>
            {{-- silence --}}
            <div class="flex justify-center mt-4">
                <div class="shadow-2xl w-10/12 h-16">
                    <div class="flex justify-between mt-6 ml-2 mr-2">
                        <p class="poppins text-sm font-normal text-ye-light">Silenciar</p>
                        <div class="relative inline-block w-8 h-4 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-4 h-4 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle" class="toggle-label block overflow-hidden h-4 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- delete conversation --}}
            <div class="flex justify-center mt-4">
                <div class="shadow-2xl w-10/12 h-16">
                    <div class="flex mt-6 ml-3 mr-2">
                        <img src="assets/trash-bin.svg" alt="delete conversation" class="h-">
                        <p class="poppins text-ye-light text-sm font-normal ml-2">Apagar conversa</p>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <style>
        /* CHECKBOX TOGGLE SWITCH */
        /* @apply rules for documentation, these do not work as inline style */
        /* https://tailwindcomponents.com/component/toggle-switch */
        .toggle-checkbox:checked {
          @apply: right-0 bg-gr-switch;
          right: 0;
          border-color: #A0D755;
        }
        .toggle-checkbox:checked + .toggle-label {
          @apply: bg-gr-switch;
          background-color: #A0D755;
        }
        </style>
@endsection
