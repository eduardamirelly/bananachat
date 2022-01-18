@extends('layouts.base')

@section('title', 'Chat')

@section('content')

    <!-- CHAT DASHBOARD -->
    <div id="chat" class="flex w-full">

        <!-- SIDEBAR -->
        <div id="sidebar" class="sidebar bg-bro-dark">
            
            <!-- HEADER SIDEBAR -->
            <div class="sidebar-header flex flex-wrap justify-between items-center px-8 pb-2 pt-6 shadow">
                <div class="flex items-center px-3 py-2">
                    <div id="div-arrow" class="mr-2">
                        <a href="#" id="arrow">
                            <img class="h-8 w-8" src="{{ asset('assets/arrow-left.png') }}" alt="user-profile">
                        </a>
                    </div>
                    <div class="mr-2">
                        <img id="user-profile" class="rounded-full h-12 w-12" src="{{ asset('assets/gabriel-victor.jpeg') }}" alt="user-profile">
                    </div>
                    <p class="text-whi-yellow font-regular text-sm sm:text-md">GabrielVictor</p>
                </div>
                <div class="sidebar-buttons flex align-content-end items-center px-3 py-2">
                    <div class="mr-4">
                        <a href="#"><img class="w-4/5" src="{{ asset('assets/chat_logo.svg') }}"></a>
                    </div>
                    <div>
                        <a><img class="w-4/5" src="{{ asset('assets/menu.svg') }}"></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-search flex px-8 py-4 shadow relative">
                <input class="h-10 w-full bg-ye-light rounded-3xl px-4 text-bro-dark text-sm font-regular placeholder-bro-dark border-none focus:ring-whi-yellow" type="search" name="search" placeholder="Buscar...">
                <button type="submit" class="absolute right-0 mr-7 w-10 h-10">
                    <img src="/assets/lupe.svg">
                </button>
            </div>

            <!-- CONVERSATION LIST -->
            <div class="overflow-y-scroll scroll-base flex flex-col items-center divide-y-2 divide-bro-darker divide-opacity-25">

                <!-- CONVERSATION -->
                <div class="flex justify-between items-center w-full px-8 py-4 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="relative mr-4">
                            <img class="chat-profile rounded-full h-14 w-14" src="{{ asset('assets/Eduarda.jpg') }}" alt="chat-profile">
                            <div class="absolute bottom-0 right-0 bg-gray-400 rounded-full h-4 w-4"></div>
                        </div>
                        <div>
                            <p class="text-md text-whi-opaque">404neves</p>
                            <p class="text-xs text-whi-opaque">última mensagem</p>
                            <p class="text-xs text-whi-opaque">00:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 mb-2 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
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
                            <img class="rounded-full h-14 w-14" src="{{ asset('assets/Eduarda.jpg') }}" alt="chat-profile">
                            <div class="absolute bottom-0 right-0 bg-gray-400 rounded-full h-4 w-4"></div>
                        </div>
                        <div>
                            <h5 class="text-md font-medium text-bro-dark">404neves</h5>
                            <p class="text-xs font-regular text-bro-dark">Offline</p>
                        </div>
                    </div>
                    <div class="py-2 sm:pl-4 flex items-center flex-wrap">
                        <div class="ml-8">
                            <img src="{{ asset('assets/menu-bro.svg') }}" alt="menu">
                        </div>
                        <div>
                            <a href="#" id="toggle-button" class="ml-8 hidden">
                                <img class="w-10" src="{{ asset('assets/menu-toggle.png') }}" alt="menu">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 sm:px-16 py-2">
                <div class="chat-messages flex flex-col px-4 overflow-y-scroll">
                    
                    <!-- MESSAGE TO ME -->
                    <div class="message mt-2 self-start">
                        <div class="mb-1">
                            <p class="text-sm text-gr-medium font-medium">Eduarda</p>
                        </div>
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem. hi dsd.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>
                    <!-- MESSAGE TO ME SEM HEADER -->
                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>

                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">Lorem ipsum dolor sit amet consectetur, adipisicing elit. in veritatis commodi excepturi! Cum explicabo at sit rerum laborum non illo ipsum.</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">00:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- MESSAGE FROM ME -->
                    <div class="message mt-2 flex flex-col self-end">
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
                    </div>
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
        var arrow = document.getElementById('arrow');
        var sidebar = document.getElementById('sidebar');

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

    </script>

@endsection