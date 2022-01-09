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
                    <p class="text-xs text-whi-opaque font-medium mb-1">{{ $message->from_name }}</p>
                    {{ $message->content }}
                    <p class="text-xx text-whi-opaque self-end mt-1">{{ date_format($message->created_at, 'd/m/Y H:i') }}</p>
                </div>
            </div>
        @endforeach
        


        
    </div>
    
    <div class="w-11/12 h-1/6 flex justify-center items-center">
        <form style="width: 100%;" action="{{ route('create-message') }}" method="get" wire:submit.prevent="save">
            <div class="w-full flex justify-between">
                {{-- Modificar para um textarea --}}
                <input class="h-11 width-textInput rounded-xl bg-ye-light text-bro-dark text-sm placeholder-bro-dark font-regular border-none focus:ring-ye-medium" type="text" name="message" placeholder="Digite uma mensagem..." autocomplete="off">
                <button class="width-send bg-bro-dark flex justify-center items-center rounded-xl mr-2 hover:bg-gr-dark"><img src="/assets/send.svg"></button>
            </div>
        </form>
    </div>
    
</div>