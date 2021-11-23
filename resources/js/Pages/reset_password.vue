<template>
    <Head>
        <title>Resetar Senha</title>
        <link rel="icon" href="/assets/logo-bananachat.png">
    </Head>

    <div id="content-block" class="flex flex-row justify-center items-center bg-ye-light h-screen font-poppins">

        <jet-validation-errors class="mb-4" />

        <div class="content w-2/6 h-4/5 lg:shadow-lg hidden lg:block">
            <img :src="'/assets/banana-min.jpg'" class="w-full rounded-l-md object-cover h-full">
        </div>

        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-2/6 md:w-4/6 h-4/5 bg-bro-dark rounded-r-md rounded-l-md lg:rounded-r-md lg:rounded-l-none shadow-lg">
            
            <p class="font-semibold text-3xl text-whi-yellow">
                Redefinir senha
            </p>  
            
            <form @submit.prevent="submit">
                <div class="mt-4">
                    <input id="email" type="email" placeholder="E-mail" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.email" required autofocus />
                </div>

                <div class="mt-4">
                    <input id="password" type="password" placeholder="Senha" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <input id="password_confirmation" type="password" placeholder="Confirmar senha" class="rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>

                <button class="mt-4 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    <p class="text-whi-yellow font-semibold text-lg">
                        Confirmar
                    </p>
                </button>
            </form>
            <p class="mt-10 text-whi-yellow text-sm">
                Sobre o 
                <a class="text-whi-opaque hover:text-gr-light" href="#">
                    Banana Chat
                </a>
            </p>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
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
            email: String,
            token: String,
        },

        data() {
            return {
                form: this.$inertia.form({
                    token: this.token,
                    email: this.email,
                    password: '',
                    password_confirmation: '',
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('password.update'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })
</script>
