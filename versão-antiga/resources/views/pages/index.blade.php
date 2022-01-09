@extends('layouts.base')

@section('title', 'Home')

@section('content')

    <!-- INDEX -->

    <div id="content-block-welcome" class="bg-whi-yellow font-poppin text-bro-dark ">
        <!-- NAVBAR  -->
        <div class="w-full flex sm:flex-row flex-col sm:justify-between space-y-4 sm:space-y-0 sm:h-24">
            <div class="flex sm:justify-start items-center sm:ml-20 gap-x-1 bananachat_nav_welcome bananachat_logo_nav">
                <img src="/assets/logo_dashboard.svg" class="h-8" alt="logo bananachat">
                <h1 id="w600"> BananaChat</h1>
            </div>

            <div class="flex sm:justify-end sm:items-center sm:mr-20 gap-x-4 bananachat_nav_welcome">
                <a href="{{ route('login') }}" class="flex items-center text-sm hover:text-gr-medium" id="w400">
                    <img src="/assets/lupe.svg" alt="">
                    <p class="flex">Login</p> 
                </a>

                <a href="{{ route('register') }}" class="flex items-center text-sm hover:text-gr-medium" id="w400">
                    <img src="/assets/lupe.svg" alt="">
                    <p class="flex">Register</p>
                </a>
            </div>
        </div>

        <!-- IMAGEM + TEXTO -->
        <div class="flex flex-col w-full mt-8">
            <div class="flex justify-around">
                <h2 class="text-center text-2xl bananachat_nav_welcome" id="w600">Aplicação de mensagens instantâneas</h2>
            </div>
            <div class="flex justify-around mt-6">
                <img src="assets/chat_conversation_page.svg" class="h-1/2" alt="conversas no chat">
            </div>
        </div>
        
        <!-- DESENVOLVEDORES -->
        <div class="flex flex-col mt-48">
            <div class="flex justify-around ml-auto mr-auto ">
                <h2 class="text-2xl" id="w600">Desenvolvedores</h2>
            </div>

            <div class="flex flex-col mt-6 ml-auto mr-auto text-black">
                <!-- TRES -->
                <div class="flex flex-row space-x-3 ml-auto mr-auto">
                    <div class="flex flex-col">
                        <div class="flex justify-around">
                            <img src="https://suap.ifrn.edu.br/media/alunos/220139.mR7rMKsskePS.jpg"
                            alt="..."
                            class="rounded-full h-24 w-24 align-middle border-none"/>
                        </div>
                        <div class="flex justify-around"><p class="text-base" id="w300">Eduarda Mirelly</p></div>
                        <div class="flex justify-around"><p class="text-sm" id="w300">Fullstack</p></div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-around">
                            <img src="https://suap.ifrn.edu.br/media/alunos/219829.5SDnHZVdjC7W.jpg"
                            alt="..."
                            class="rounded-full h-24 w-24 align-middle border-none"/>
                        </div>
                        <div class="flex justify-around"><p class="text-base" id="w300">João Vitor</p></div>
                        <div class="flex justify-around"><p class="text-sm" id="w300">Fullstack</p></div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-around">
                            <img src="https://suap.ifrn.edu.br/media/alunos/222781.Phir5fGSQ308.jpg"
                            alt="..."
                            class="rounded-full h-24 w-24 align-middle border-none"/>
                        </div>
                        <div class="flex justify-around"><p class="text-base" id="w300">Gabriel Victor</p></div>
                        <div class="flex justify-around"><p class="text-sm" id="w300">Fullstack</p></div>
                    </div>
                </div>
                <!-- DOIS -->
                <div class="flex flex-row space-x-3 ml-auto mr-auto mt-4">
                    <div class="flex flex-col">
                        <div class="flex justify-around">
                            <img src="https://suap.ifrn.edu.br/media/alunos/219848.kuGDjMqhntOE.jpg"
                            alt="..."
                            class="rounded-full h-24 w-24 align-middle border-none"/>
                        </div>
                        <div class="flex justify-around"><p class="text-base" id="w300">Hiterlan Salvador</p></div>
                        <div class="flex justify-around"><p class="text-sm" id="w300">Frontend</p></div>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex justify-around">
                            <img src="https://suap.ifrn.edu.br/media/alunos/221026.eb2HXdO0xRdB.jpg"
                            alt="..."
                            class="rounded-full h-24 w-24 align-middle border-none"/>
                        </div>
                        <div class="flex justify-around"><p class="text-base" id="w300">Carlos Breno</p></div>
                        <div class="flex justify-around"><p class="text-sm" id="w300">Frontend</p></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gr-light w-full h-52 mt-48 flex flex-col text-black">
            <div class="mt-auto mb-auto" id="w300">
                <h4 class="text-sm flex justify-around">©2021 BananaChat</h4>
                <h4 class="text-sm flex justify-around">Open Source Project</h4>
                <h4 class="text-sm flex justify-around">Disponível em:</h4>
                <div class="">
                    <a class="text-sm flex justify-around" href="https://github.com/eduardamirelly/bananachat">
                        <img src="/assets/git.svg" class="h-10" alt="git image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- END INDEX -->

    <style module>
        body::-webkit-scrollbar {
            width: 12px;               /* width of the entire scrollbar */
        }
    
        body::-webkit-scrollbar-track {
            background: #E8C16F;        /* color of the tracking area */
        }
    
        body::-webkit-scrollbar-thumb {
            background-color: #583001;    /* color of the scroll thumb */
        }
    </style>

@endsection