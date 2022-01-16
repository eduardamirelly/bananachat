@extends('layouts.base')

@section('title', 'HOME')

@section('content')

    <!-- HOME PAGE -->
    <div class="container mx-auto">
        <div class="navbar py-8 px-8 xl:px-40 flex-wrap flex justify-between items-center">
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
                    <a class="text-md font-medium text-bro-dark py-2 hover:border-solid hover:border-bro-dark hover:border-b-2" href="#">
                        <img src="{{ asset('assets/') }}" alt="">
                        Desenvolvedores
                    </a>
                </li>
                <li>
                    <a class="text-md font-medium text-bro-dark py-2 hover:border-solid hover:border-bro-dark hover:border-b-2" href="#">
                        Login
                    </a>
                </li>
                <li class="mt-2 md:mt-0">
                    <a class="text-md font-medium text-bro-dark px-8 py-2 border-2 border-solid border-bro-dark  rounded-md" href="#">
                        Cadastrar
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        /* NAVBAR COLLAPSE */
        var toggle_button = document.getElementById('toggle-button');
        // var menu_image = document.getElementById('menu-image');
        var navbar_links = document.getElementById('navbar-links');

        toggle_button.addEventListener('click', function(){
            if(navbar_links.classList.contains('nav-collapse')){
                navbar_links.classList.remove('nav-collapse');
                // menu_image.src = 'assets/menu.png';
            }else{
                navbar_links.classList.add('nav-collapse');
                
                // menu_image.src = 'assets/next.png'
            }
        });
    </script>
    
@endsection