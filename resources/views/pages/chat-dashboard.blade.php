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
                        <img id="user-profile" class="rounded-full h-12 w-12" src="{{ asset('assets/Eduarda.jpg') }}" alt="user-profile">
                    </div>
                    <p class="text-whi-yellow font-regular text-sm sm:text-md">{{ $myInfo->name }}</p>
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

                @foreach ($users as $user)
                    <!-- CONVERSATION -->
                    <div class="conversation flex justify-between items-center w-full px-8 py-4 hover:bg-bro-darker cursor-pointer">
                        <div class="flex items-center">
                            <div class="relative mr-4">
                                <div class="rounded-full h-14 w-14 bg-gr-light"></div>
                                {{-- <img class="chat-profile rounded-full h-14 w-14" src="https://suap.ifrn.edu.br/media/alunos/219829.5SDnHZVdjC7W.jpg" alt="chat-profile"> --}}
                                <div class="absolute bottom-0 right-0 bg-gray-400 rounded-full h-4 w-4"></div>
                            </div>
                            <div>
                                <p class="chat_name text-md text-whi-opaque">{{ $user->name }}</p>
                                <p class="to_user" style="display: none;">{{ $user->id }}</p>
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
                @endforeach

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
                            <h5 id="chat-active" class="text-md font-medium text-bro-dark"></h5>
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

@push('scripts')

    <script>
        $(function (){
            let user_id = '{{ auth()->user()->id }}';
            let ip_address = '127.0.0.1';
            let socket_port = '3000';
            let socket = io('http://banana-chat-web.herokuapp.com/');
            let chat_active = '';
            let name_chat_active = '';
            var message_datetime = "{{ date('d/m/Y H:i') }}";

            let chat_input = $('#chat-input');
            let conversations = $('.conversation');
            let messages_chat_active = [];

            socket.emit('user_connected', {{ $myInfo->id }});

            $(conversations).each(function( index, value ) {
                $(conversations[index]).click(function (e){
                    
                    $(conversations).each(function(index) { 
                        $(conversations[index]).removeClass('bg-bro-darker'); 
                    });
                    
                    $(conversations[index]).addClass('bg-bro-darker');

                    socket.on('receivedMessage', function(message){
                        renderMessageToMe(message, message_datetime);
                    })

                    chatIdentify(index);
                    
                });
            });

            function chatIdentify(index) {
                let users_chat = $('.to_user');
                let name_users_chat = $('.chat_name');
                let to_user = $(users_chat[index]).html();
                chat_active = to_user;
                name_chat_active = $(name_users_chat[index]).html();
                let url = "chat/" + to_user ;
                
                console.log(to_user);
                console.log(url);

                $.ajax({
                    url: url,
                    type: 'GET',
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    contentType: "application/json",
                    success: function (response) {
                        if (response.success) {
                            previousMessages(response.messages_chat);
                        }
                        console.log(response.messages_chat);
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            }

            function previousMessages(messages_chat){
                $('.chat-messages').html('');
                $('#chat-active').text(name_chat_active);
                for (let index = 0; index < messages_chat.length; index++) {
                    if(messages_chat[index].from_user_id == {{ $myInfo->id }}){
                        renderMessageFromMe(messages_chat[index].content, formatDate(messages_chat[index].created_at));
                    }else{
                        renderMessageToMe(messages_chat[index].content, formatDate(messages_chat[index].created_at));
                    }
                }
            }

            chat_input.keypress(function (e){
                let message = $(this).html();
                console.log(message);
                if(e.which === 13 && !e.shiftKey){
                    socket.emit('chatActive', chat_active, message);
                    chat_input.html('');
                    sendMessage(message);
                    return false;
                }
            });

            function sendMessage(message){
                let url = "{{ route('message.send-message') }}";
                let formData = new FormData();
                let token = "{{ csrf_token() }}";
                let to_user_id = chat_active;

                formData.append('content', message);
                formData.append('to_user_id', to_user_id);
                formData.append('_token', token);

                renderMessageFromMe(message, message_datetime);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    success: function (response) {
                        if (response.success) {
                            console.log('Mensagem: ' + response.message_obj.content);
                        }
                    },
                    error: function(data) {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });

            }
            
            function scrollDown() {
                var height = 0;
                $('.message').each(function(i, value){
                    height += parseInt($(this).height());
                });

                height += '';
                $('.chat-messages').scrollTop(height);
            }

            function renderMessageFromMe(message, message_datetime){
                $('.chat-messages').append
                (`
            
                    <div class="message mt-2 flex flex-col self-end">
                        <div class="bg-gr-medium p-3 rounded-br-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">${message}</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">${message_datetime}</p>
                            </div>
                        </div>
                    </div> 
                
                `);
                scrollDown();
            }

            function renderMessageToMe(message, message_datetime){
                $('.chat-messages').append
                (`
            
                    <div class="message mt-2 self-start">
                        <div class="bg-gr-dark p-3 rounded-bl-none rounded-lg flex flex-col">
                            <p class="text-sm-1 font-regular text-whi-opaque">${message}</p>
                            <div class="mt-2 self-end">
                                <p class="text-xs font-light text-whi-opaque">${message_datetime}</p>
                            </div>
                        </div>
                    </div>
                
                `);
                scrollDown();
            }

            function formatDate(date) {
                let date_obj = new Date(date);
                let new_format_date = 
                        (date_obj.getDate() < 10 ? '0' + date_obj.getDate() : date_obj.getDate()) + '/'
                    +   (date_obj.getMonth()+1 < 10 ? '0' + (date_obj.getMonth()+1) : (date_obj.getMonth()+1)) + '/'
                    +   (date_obj.getFullYear()) + ' '
                    +   (date_obj.getHours() < 10 ? '0' + date_obj.getHours() : date_obj.getHours()) + ':'
                    +   (date_obj.getMinutes() < 10 ? '0' + date_obj.getMinutes() : date_obj.getMinutes())
                ;
                return new_format_date;
            }
        });

       

        

    </script>
    
@endpush
