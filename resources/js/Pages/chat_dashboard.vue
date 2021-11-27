<template>

    <Head>
        <title>BananaChat | Chat</title>
        <link rel="icon" href="/assets/logo-bananachat.png">
    </Head>

    <div class="flex w-full h-screen font-poppins">
        <!-- SIDEBAR -->
        <div class="bg-bro-dark w-3/12 h-full">
            <!-- HEADER SIDEBAR -->
            <div class="height-10 flex justify-between items-center px-8 py-4 pt-5 shadow">
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
            <div class="height-81 overflow-y-scroll scroll-base flex flex-col items-center divide-y-2 divide-bro-darker">

                <!-- CONVERSATION -->
                <div class="flex justify-between items-center px-8 py-6 hover:bg-bro-darker cursor-pointer">
                    <div class="flex">
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

                <!-- CONVERSATION -->
                <div class="flex justify-between items-center px-8 py-6 hover:bg-bro-darker cursor-pointer">
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

        <!-- Messages Chat -->
        <div class="w-9/12 h-screen bg-whi-yellow">

        </div>
    </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
        },
    })
</script>
