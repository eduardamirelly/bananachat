<template>
    
    <Head title="Log in" />

    <div class="flex flex-row justify-center">

        <div class="flex flex-row items-center">
            <img src="https://candogeat.net/wp-content/uploads/2019/07/can-dog-eat-bananas.jpg" 
            alt="auau banana"
            class="md:visible invisible">
        </div>

        
        <!--- Login container --->
        <jet-authentication-card class="flex flex-row ">

            <jet-validation-errors class="mb-4" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <p class="text-2xl mt-20 mb-7">
                Entrar
            </p>

            <form @submit.prevent="submit">
                    
                <div>
                    <!--- <jet-label for="email" value="Email" /> --->
                    <jet-input id="email" placeholder="E-mail" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus />
                </div>

                <div class="mt-4">
                    <!--- <jet-label for="password" value="Password" /> --->
                    <jet-input id="password" placeholder="Senha" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                </div>

                <div class="justify-start">

                    <jet-button class="mt-6 sm:w-1/4 w-2/6" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <p class="sm:ml-3 ml-4">
                            Login
                        </p>
                    </jet-button>

                    <p class="mt-5">
                        Não tem conta? 
                        <a :href="route('register')">
                                Registre-se
                        </a>
                    </p>

                    <p class="mt-2">
                        Esqueceu sua senha? 
                        <a :href="route('password.request')">
                            Clique aqui
                        </a>
                    </p>

                    <p class="mt-20 mb-5">
                        Sobre o 
                        <a href="">
                            Banana Chat
                        </a>
                    </p>

                </div>
            </form>
        </jet-authentication-card>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
        },

        props: {
            canResetPassword: Boolean,
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
