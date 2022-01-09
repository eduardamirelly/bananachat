@extends('layouts.base')

@section('title', 'Chat')

@section('content')

    <!-- CHAT DASHBOARD -->

    <div class="flex w-full h-screen font-poppins">

        <!-- SIDEBAR -->

        <div class="bg-bro-dark w-3/12 h-full">
            
            <!-- HEADER SIDEBAR -->

            <div class="height-14 flex justify-between items-center px-8 pb-2 pt-6 pt-5 shadow">
                <div class="flex items-center">
                    <div class="rounded-full h-12 w-12 bg-whi-opaque mr-4"></div>
                    <p class="text-whi-yellow font-regular text-lg">Username</p>
                </div>
                <div class="flex align-content-end items-center">
                    <div class="mr-6"><a href="#"><img class="w-4/5" src="/assets/chat_logo.svg"></a></div>
                    <div>
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <img class="w-4/5" src="/assets/menu.svg">
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex height-9 px-8 py-4 shadow relative">
                <input class="h-10 w-full bg-ye-light rounded-3xl px-4 text-bro-dark text-sm font-regular placeholder-bro-dark border-none focus:ring-whi-yellow" type="search" name="search" placeholder="Buscar...">
                <button type="submit" class="absolute right-0 mr-7 w-10 h-10"><img src="/assets/lupe.svg"></button>
            </div>

            <!-- CONVERSATION LIST -->

            <div class="height-77 overflow-y-scroll scroll-base flex flex-col items-center divide-y-2 divide-bro-darker divide-opacity-25">

                @foreach ($chats as $chat)

                    <!-- CONVERSATION -->

                    <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                        <div class="flex items-center">
                            <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                            <div>
                                <p class="text-md text-whi-opaque">Chat #{{ $chat->id }}</p>
                                <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                                <p class="text-xs text-whi-opaque">{{ $chat->created_at }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-around items-center h-full">
                            <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                                <p class="text-xs font-medium text-bro-dark">10</p>
                            </div>
                            <div><img class="w-5" src="/assets/mute.svg"></div>
                        </div>
                    </div>

                @endforeach
                
            </div>
        </div>
        
    </div>

    <!-- END CHAT DASHBOARD  -->

@endsection