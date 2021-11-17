<template>
    <Head>
        <title>BananaChat | Register</title>
        <link rel="icon" href="/assets/logo-bananachat.png">
    </Head>

    <div id="content-block" class="flex flex-row justify-center items-center bg-ye-light h-screen font-poppins">

        <jet-validation-errors class="mb-4" />

        <div class="content-register content flex flex-col justify-center py-6 px-8 w-5/6 lg:w-2/6 md:w-4/6 h-4/5 bg-bro-dark rounded-l-md rounded-r-md lg:rounded-l-md lg:rounded-r-none shadow-lg">
            <p class="font-semibold text-3xl text-whi-yellow">
                Register
            </p>

            <form @submit.prevent="submit">
                <div>
                    <input id="name" placeholder="Usuário" type="text" class="mt-6 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.name" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <input id="email" placeholder="E-mail" type="email" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.email" required />
                </div>

                <div class="mt-4">
                    <input id="password" placeholder="Senha" type="password" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <input id="password_confirmation" placeholder="Confirmar Senha" type="password" class="mt-4 rounded-md block w-full bg-ye-medium text-whi-opaque placeholder-whi-opaque h-14 border-none focus:ring-whi-yellow" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                    <jet-label for="terms">
                        <div class="flex items-center">
                            <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                            <div class="ml-2">
                                I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                            </div>
                        </div>
                    </jet-label>
                </div>
                
                <button class="mt-4 bg-bro-medium py-3 px-14 rounded-md hover:bg-gr-medium" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    <p class="text-whi-yellow font-semibold text-lg">
                        Register
                    </p>
                </button>
                <p class="mt-10 text-whi-yellow text-sm">
                    Sobre o 
                    <a class="text-whi-opaque" href="#">
                        Banana Chat
                    </a>
                </p>
            </form>
            
        </div>

        <div class="content-register content w-2/6 h-4/5 lg:shadow-lg hidden lg:block">
            <img :src="'/assets/banana-min.jpg'" class="w-full rounded-r-md object-cover h-full">
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

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })
</script>
