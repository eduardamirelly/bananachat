@extends('layouts.base')

@section('title', 'Chat')

@section('content')

    <!-- CHAT DASHBOARD -->
    <div id="chat" class="flex w-full">

        <!-- SIDEBAR -->
        <div id="sidebar" class="sidebar bg-bro-dark">
            {{-- Profile indicator --}}
            <div class="mt-12 ml-4 flex">
                <a href=""><img src="assets/arrow-left.png" alt="left arrow" class="h-6"></a>
                <h3 class="ml-2 poppins font-medium text-whi-yellow">Perfil</h3>
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
                        <img src="assets/edit-text.svg" alt="edit name" class="h-4">
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
                        <img src="assets/edit-text.svg" alt="edit name" class="h-4">
                    </div>
                </div>
            </div>
        </div>

        <!-- CHAT BODY -->
        <div class="chat-body flex flex-col justify-between items-center">
            <div class="w-full pt-6 pb-4 px-4 sm:px-16">
                <div class="chat-header flex flex-wrap justify-around sm:justify-between items-center pb-2 border-solid border-b border-bro-dark">
                    <div class="py-2 sm:pr-8 flex items-center flex-wrap">
                        <div class="relative mr-4">
                            <div class="rounded-full h-14 w-14 bg-gr-light"></div>
                            {{-- <img class="rounded-full h-14 w-14" src="https://suap.ifrn.edu.br/media/alunos/219829.5SDnHZVdjC7W.jpg" alt="chat-profile"> --}}
                            <div class="absolute bottom-0 right-0 bg-gray-400 rounded-full h-4 w-4"></div>
                        </div>
                        <div>
                            <h5 class="text-md font-medium text-bro-dark">-------</h5>
                            <p class="text-xs font-regular text-bro-dark">Offline</p>
                        </div>
                    </div>
                    <div class="py-2 sm:pl-4 flex items-center flex-wrap"> 
                        <div>
                            <a href="#" id="toggle-button" class="ml-8 hidden">
                                <img class="w-10" src="{{ asset('assets/menu-toggle.png') }}" alt="menu">
                            </a>
                        </div>
                        <div class="flex">
                            <a href="#" id="toggle-dropdown" class="ml-8">
                                <img src="{{ asset('assets/menu-bro.svg') }}" alt="menu">
                            </a>
                        </div>
                    </div>
                    <div id="chat-dropdown" class="chat-dropdown absolute right-0">
                        <div class="shadow-md">
                            <div class="px-6 py-3 bg-bro-dark">
                                <a href="#" class="text-sm font-light text-whi-opaque hover:text-gr-light">
                                    Dados do Usuário
                                </a>
                            </div>
                            <div class="px-6 py-3 bg-bro-dark">
                                <a href="#" class="text-sm font-light text-whi-opaque hover:text-gr-light">
                                    Silenciar
                                </a>
                            </div>
                            <div class="px-6 py-3 bg-bro-dark">
                                <a href="#" class="text-sm font-light text-whi-opaque hover:text-gr-light">
                                    Limpar mensagens
                                </a>
                            </div>
                            <div class="px-6 py-3 bg-bro-dark">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="text-sm font-light text-whi-opaque hover:text-gr-light">
                                        Logout
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 sm:px-16 py-2">
                <div class="chat-messages flex flex-col px-4 overflow-y-scroll">
                    
                    <!-- MESSAGE TO ME -->
                    {{-- <div class="message mt-2 self-start">
                        <div class="mb-1">
                            <p class="text-sm text-gr-medium font-medium">Eduarda</p>
                        </div>
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem. hi dsd.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- MESSAGE TO ME SEM HEADER -->
                    {{-- <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div> --}}

                    <!-- MESSAGE FROM ME -->
                    {{-- <div class="message mt-2 flex flex-col self-end">
                        <div class="mb-1 self-end">
                            <p class="text-sm text-gr-medium font-medium">Você</p>
                        </div>
                        <div class="bg-gr-medium p-3 rounded-br-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem maiores hic adipisci quae, nisi recusandae magnam, doloribus, in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>
                    <!-- MESSAGE FROM ME SEM HEADER -->
                    <div class="message mt-2 flex flex-col self-end">
                        <div class="bg-gr-medium p-3 rounded-br-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem. gfgf</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="w-full px-4 sm:px-16 pt-2 pb-6">
                <div class="flex justify-between items-center">
                    <div id="chat-input" class="chat-input overflow-y-auto text-sm text-bro-dark bg-ye-light focus:ring-1 focus:ring-bro-dark outline-none" contenteditable></div>
                    <div class="div-chat-send self-end">
                        <button id="chat-send" class="px-4 py-2 bg-bro-dark rounded-sm flex justify-center items-center">
                            <img class="w-8" src="{{ asset('assets/send.svg') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>

        var toggle_button = document.getElementById('toggle-button');
        var toggle_dropdown = document.getElementById('toggle-dropdown');
        var arrow = document.getElementById('arrow');
        var sidebar = document.getElementById('sidebar');
        var chat_dropdown = document.getElementById('chat-dropdown');

        toggle_button.addEventListener('click', (e) => {
            if(sidebar.classList.contains('collapse')){
                sidebar.classList.remove('collapse');
            }else{
                sidebar.classList.add('collapse');
            }
        });
        arrow.addEventListener('click', (e) => {
            sidebar.classList.remove('collapse');
        });

        toggle_dropdown.addEventListener('click', (e) => {
            if(chat_dropdown.classList.contains('show')){
                chat_dropdown.classList.remove('show');
            }else{
                chat_dropdown.classList.add('show');
            }
        });

    </script>

@endsection
