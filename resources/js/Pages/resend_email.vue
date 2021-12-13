<template>
    <Head>
        <title> BananaChat | Verificação de E-mail </title>>
        <link rel="icon" href="/assets/logo-bananachat.png">
    </Head>
    <div  id="" class="flex flex-col justify-center items-center bg-whi-yellow h-screen font-poppins">
        <div class="items-end mb-6">
            <img class=" h-32" src="assets\logo_dashboard.svg" alt="logo"/>
        </div>

        <div class="items-start flex flex-col justify-center py-6 px-8 w-5/6 xl:w-2/6 lg:w-3/6 md:w-4/6 bg-bro-dark rounded-md shadow-lg">
            <div>
                <p class="font-medium text-justify text-lm text-whi-yellow">
                    Obrigado por inscrever-se! Antes de começar, você poderia verificar seu endereço de e-mail clicando no link que acabamos de enviar para você? Se você não recebeu o e-mail, teremos o prazer de enviar outro.
                </p>
            </div>

            <div class="mb-4 font-medium text-sm text-green-600" v-if="verificationLinkSent" >
                Um novo link de verificação foi enviado para o endereço de e-mail que você forneceu durante o registro.
            </div>

            <form @submit.prevent="submit">
                <div class="mt-6 flex flex-col sm:flex-row items-center justify-around sm:space-x-6">
                    <button class="bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Reenviar e-mail de verificação
                        </p>
                    </button>

                    <a :href="route('logout')" method="post" as="button" class="underline text-sm mt-4 sm:mt-0 text-whi-yellow font-semibold hover:text-gr-medium">Sair</a>
                </div>
                <p class="mt-6 text-xs text-whi-yellow">
                    Sobre o 
                    <a class="text-whi-opaque" :href="route('welcome')">
                        Banana Chat
                    </a>
                </p>
            </form>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            Link,
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form()
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('verification.send'))
            },
        },

        computed: {
            verificationLinkSent() {
                return this.status === 'verification-link-sent';
            }
        }
    })
</script>
