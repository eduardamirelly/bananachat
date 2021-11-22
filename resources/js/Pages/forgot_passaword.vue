<template>
    <Head>
        <title>Recuperar Senha</title>
        <link rel="icon" href="/assets/logo-bananachat.png">
    </Head>

    <div id="content-block" class="flex flex-row justify-center items-center bg-ye-light h-screen font-poppins">

        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-2/6 md:w-4/6 h-4/5 bg-bro-dark rounded-l-md lg:rounded-l-md lg:rounded-r-none shadow-lg">
            <jet-validation-errors class="mb-4" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <p class="font-semibold text-3xl text-whi-yellow">
                Redefinir senha
            </p>    

            <form @submit.prevent="submit">
                
                <div>
                    <input id="email" placeholder="E-mail" type="email" class="mt-28 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.email" required autofocus />
                </div>

                <p class="font-regular text-base text-justify mt-20 text-whi-yellow">
                    Verifique seu E-mail para continuar a redefinição de senha.
                </p>

                <div class="flex items-center justify-end mt-4">
                    <button class="mt-12 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Confirmar
                        </p>
                    </button>
                </div>
            </form>
            <p class="mt-10 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque" href="#">
                    Banana Chat
                </a>
            </p>
        </div>

        <div class="content w-2/6 h-4/5 lg:shadow-lg hidden lg:block">
            <img :src="'/assets/banana-min.jpg'" class="w-full rounded-r-md object-cover h-full">
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3';
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetLabel,
            JetValidationErrors
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: ''
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.email'))
            }
        }
    })
</script>
