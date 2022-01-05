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
                    <div><a href="#"><img class="w-4/5" src="/assets/menu.svg"></a></div>
                </div>
            </div>
            <div class="flex height-9 px-8 py-4 shadow relative">
                <input class="h-10 w-full bg-ye-light rounded-3xl px-4 text-bro-dark text-sm font-regular placeholder-bro-dark border-none focus:ring-whi-yellow" type="search" name="search" placeholder="Buscar...">
                <button type="submit" class="absolute right-0 mr-7 w-10 h-10"><img src="/assets/lupe.svg"></button>
            </div>

            <!-- CONVERSATION LIST -->

            <div class="height-77 overflow-y-scroll scroll-base flex flex-col items-center divide-y-2 divide-bro-darker divide-opacity-25">

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>

                <!-- CONVERSATION -->

                <div class="flex justify-between items-center w-full px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex items-center">
                        <div class="rounded-full h-12 w-12 bg-whi-yellow mr-3"></div>
                        <div>
                            <p class="text-md text-whi-opaque">Chat #0001</p>
                            <p class="text-xs text-whi-opaque">última mensagem recebida</p>
                            <p class="text-xs text-whi-opaque">20:00</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-around items-center h-full">
                        <div class="rounded-full h-5 w-5 bg-ye-golden flex items-center justify-center p-2.5">
                            <p class="text-xs font-medium text-bro-dark">10</p>
                        </div>
                        <div><img class="w-5" src="/assets/mute.svg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MESSAGES CHAT -->

        <div class="w-9/12 h-screen bg-whi-yellow flex flex-col items-center px-6 py-8">
            <div class="w-11/12 pb-4 px-2 flex justify-between items-center border-b-2 border-bro-dark border-opacity-50">
                <div class="flex items-center">
                    <div class="rounded-full h-12 w-12 bg-bro-dark mr-4"></div>
                    <h3 class="text-bro-dark text-lg">Chat #0001</h3>
                </div>
                <div class="flex items-center">
                    <div class="mr-5 cursor-pointer"><img src="/assets/lupe.svg" alt="lupe"></div>
                    <div class="cursor-pointer"><img src="/assets/menu-bro.svg" alt="menu-bro"></div>
                </div>
            </div>
            <div class="w-11/12 h-5/6 mt-4 mb-4 overflow-y-scroll scroll-chat">
                {{-- @foreach ($messages as $message)
                    <div class="flex flex-col mx-2">
                        <div class="max-w-sm bg-gr-medium text-xs text-whi-opaque px-2.5 py-1.5 pt-2 mb-2 flex flex-col rounded-lg rounded-bl-none">
                            <p class="text-xs text-whi-opaque font-medium mb-1">User #01</p>
                            {{ $message->content }}
                            <p class="text-xx text-whi-opaque self-end mt-1">20:00</p>
                        </div>
                    </div>
                @endforeach --}}

                @foreach ($messages as $message)
                    <div class="flex flex-col mx-2">
                        <div class="self-end max-w-sm bg-gr-dark text-xs text-whi-opaque px-2.5 py-1.5 pt-2 mb-2 flex flex-col rounded-lg rounded-br-none">
                            <p class="text-xs text-whi-opaque font-medium mb-1">User #01</p>
                            {{ $message->content }}
                            <p class="text-xx text-whi-opaque self-end mt-1">20:00</p>
                        </div>
                    </div>
                @endforeach
                


                
            </div>
            
            <div class="w-11/12 h-1/6 flex justify-center items-center">
                <form style="width: 100%;" action="{{ route('create-message') }}" method="get" wire:submit.prevent="save">
                    <div class="w-full flex justify-between">
                        <input class="h-11 width-textInput rounded-xl bg-ye-light text-bro-dark text-sm placeholder-bro-dark font-regular border-none focus:ring-ye-medium" type="text" name="message" placeholder="Digite uma mensagem...">
                        <button class="width-send bg-bro-dark flex justify-center items-center rounded-xl mr-2 hover:bg-gr-dark"><img src="/assets/send.svg"></button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <!-- END CHAT DASHBOARD  -->

@endsection