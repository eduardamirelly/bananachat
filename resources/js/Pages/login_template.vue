<template>
    
    <Head>
        <title>BananaChat | Login</title>
        <link rel="icon" href="/assets/logo-bananachat.png">
    </Head>

    <div id="content-block" class="flex flex-row justify-center items-center bg-ye-light h-screen font-poppins">

        <div class="content w-2/6 h-4/5 lg:shadow-lg hidden lg:block">
            <img :src="'/assets/banana-min.jpg'" class="w-full rounded-l-md object-cover h-full">
        </div>

        
        <!-- Login container -->
        <div class="content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-2/6 md:w-4/6 h-4/5 bg-bro-dark rounded-r-md rounded-l-md lg:rounded-r-md lg:rounded-l-none shadow-lg">

            <jet-validation-errors class="mb-4" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <p class="font-semibold text-3xl text-whi-yellow">
                Entrar
            </p>

            <form @submit.prevent="submit">
                <div> <!-- Email -->
                    <input id="email" placeholder="Usuário ou e-mail" type="email" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.email" required autofocus />
                </div>
                <div> <!-- Senha -->
                    <input id="password" placeholder="Senha" type="password" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.password" required autocomplete="current-password" />
                </div>
                <div class="justify-start">
                    <button class="mt-4 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <p class="text-whi-yellow font-semibold text-lg">
                            Login
                        </p>
                    </button>
                    <p class="mt-6 text-whi-yellow text-sm">
                        Não tem conta? 
                        <a class="text-whi-opaque" :href="route('register')">
                                Registre-se
                        </a>
                    </p>
                    <p class="mt-3 text-whi-yellow text-sm">
                        Esqueceu sua senha? 
                        <a class="text-whi-opaque" :href="route('password.request')">
                            Clique aqui
                        </a>
                    </p>
                </div>
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
    import { defineComponent } from 'vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            JetValidationErrors,
        },

        props: {
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    })
</script>
