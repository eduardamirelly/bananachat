@extends('layouts.base')

@section('title', 'HOME')

@section('content')

    <!-- INTRO-->
    <section id="intro" class="container mx-auto">

        <!-- NAVBAR -->
        <div class="navbar py-8 px-8 xl:px-24 flex-wrap flex justify-between items-center">
            <div class="mr-6 py-2 navbar-brand">
                <a href="#" class="flex items-center">
                    <img class="mr-4" src="{{ asset('assets/logo.svg') }}" alt="logo">
                    <h2 class="font-semibold text-xl text-bro-dark">BananaChat</h2>
                </a>
            </div>
            <div class="navbar-toggle py-2 block md:hidden">
                <a href="#" id="toggle-button"><img src="{{ asset('assets/menu-toggle.png') }}" alt="menu-toggle"></a>
            </div>
            <ul id="navbar-links" class="navbar-links hidden md:flex w-7/12 lg:w-5/12 flex-wrap md:justify-around">
                <li>
                    <a class="text-md uppercase font-regular text-bro-dark py-2 hover:border-solid hover:border-bro-dark hover:border-b-2" href="#desenvolvedores">
                        <img src="{{ asset('assets/') }}" alt="">
                        Desenvolvedores
                    </a>
                </li>
                <li>
                    <a class="text-md uppercase font-regular text-bro-dark py-2 hover:border-solid hover:border-bro-dark hover:border-b-2" href="#">
                        Login
                    </a>
                </li>
                <li class="mt-2 md:mt-0">
                    <a class="text-md uppercase font-regular text-bro-dark px-8 py-2 border-2 border-solid border-bro-dark rounded-md hover:bg-gr-light hover:text-whi-opaque" href="#">
                        Cadastrar
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- CONTENT INTRO -->
        <div class="md:mt-4 py-8 flex flex-col justify-center items-center mx-auto">
            <div class="z-10 px-4 flex justify-center">
                <h3 class="text-2xl md:text-4xl font-semibold text-bro-dark text-center">Aplicação de mensagens instantâneas</h3>
            </div>
            <div class="z-10 mt-12 px-4 self-center flex justify-center">
                <img class="w-full md:w-10/12 shadow-lg" src="{{ asset('assets/chat-img.png') }}" alt="chat_conversation_page">
            </div>
        </div>
    </section>

    <!-- DEVS-->
    <section id="desenvolvedores" class="container mx-auto">
        <div class="py-8 px-8 xl:px-24 flex flex-col justify-center items-center">
            <div class="py-8 px-4">
                <h4 class="text-3xl md:text-4xl font-semibold text-bro-dark text-center">Desenvolvedores</h4>
            </div>
            <div class="pb-12 pt-4 w-full md:w-8/12 lg:w-9/12 xl:w-11/12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                    <div class="px-4 py-6 flex justify-center items-center flex-col">
                        <img class="rounded-full w-44 h-44" src="https://suap.ifrn.edu.br/media/alunos/219829.5SDnHZVdjC7W.jpg" alt="profile-dev">
                        <h5 class="text-lg text-bro-dark font-medium mt-3">João Vitor</h5>
                        <p class="text-md text-bro-dark font-light">Backend</p>
                        <a href="#" class="mt-3 text-md font-regular text-whi-opaque bg-gr-medium rounded-md hover:bg-gr-dark px-12 py-2">Github</a>
                    </div>
                    <div class="px-4 py-6 flex justify-center items-center flex-col">
                        <img class="rounded-full w-44 h-44" src="{{ asset('assets/Eduarda.jpg') }}" alt="profile-dev">
                        <h5 class="text-lg text-bro-dark font-medium mt-3">Eduarda Mirelly</h5>
                        <p class="text-md text-bro-dark font-light">Fullstack</p>
                        <a href="https://github.com/eduardamirelly" class="mt-3 text-md font-regular text-whi-opaque bg-gr-medium rounded-md hover:bg-gr-dark px-12 py-2">Github</a>
                    </div>
                    <div class="px-4 py-6 flex justify-center items-center flex-col">
                        <img class="rounded-full w-44 h-44" src="https://suap.ifrn.edu.br/media/alunos/222781.Phir5fGSQ308.jpg" alt="profile-dev">
                        <h5 class="text-lg text-bro-dark font-medium mt-3">Gabriel Victor</h5>
                        <p class="text-md text-bro-dark font-light">Frontend</p>
                        <a href="#" class="mt-3 text-md font-regular text-whi-opaque bg-gr-medium rounded-md hover:bg-gr-dark px-12 py-2">Github</a>
                    </div>
                    <div class="px-4 py-6 flex justify-center items-center flex-col">
                        <img class="rounded-full w-44 h-44" src="https://suap.ifrn.edu.br/media/alunos/219848.kuGDjMqhntOE.jpg" alt="profile-dev">
                        <h5 class="text-lg text-bro-dark font-medium mt-3">Hiterlan</h5>
                        <p class="text-md text-bro-dark font-light">Frontend</p>
                        <a href="#" class="mt-3 text-md font-regular text-whi-opaque bg-gr-medium rounded-md hover:bg-gr-dark px-12 py-2">Github</a>
                    </div>
                    <div class="px-4 py-6 flex justify-center items-center flex-col">
                        <img class="rounded-full w-44 h-44" src="https://suap.ifrn.edu.br/media/alunos/221026.eb2HXdO0xRdB.jpg" alt="profile-dev">
                        <h5 class="text-lg text-bro-dark font-medium mt-3">Carlos Breno</h5>
                        <p class="text-md text-bro-dark font-light">Frontend</p>
                        <a href="#" class="mt-3 text-md font-regular text-whi-opaque bg-gr-medium rounded-md hover:bg-gr-dark px-12 py-2">Github</a>
                    </div>
            </div>
        </div>
    </section>

    <!-- FOOTER-->
    <footer class="mx-auto bg-gr-light">
        <div class="py-12 px-8 xl:px-24 flex flex-col justify-center items-center">
            <p class="mb-4 text-md font-light">&copy;2022 BananaChat</p>
            <p class="text-sm font-light">Software Open Source</p>
            <p class="text-sm font-light">Disponível em:</p>
            <a class="mt-3" href="https://github.com/eduardamirelly/bananachat">
                <img src="{{ asset('assets/github.svg') }}" alt="github-logo">
            </a>
        </div>
    </footer>

    <script>
        /* NAVBAR COLLAPSE */
        var toggle_button = document.getElementById('toggle-button');
        var navbar_links = document.getElementById('navbar-links');

        toggle_button.addEventListener('click', function(){
            if(navbar_links.classList.contains('nav-collapse')){
                navbar_links.classList.remove('nav-collapse');
            }else{
                navbar_links.classList.add('nav-collapse');
            }
        });
    </script>
    
@endsection