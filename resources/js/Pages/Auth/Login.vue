<template>
    <div class="auth-container hero is-fullheight columns">
        <div class="column is-10-mobile is-8-tablet is-4-desktop is-offset-1-mobile is-offset-2-tablet is-offset-4-desktop hero-body">
            <Logo />

            <div class="panel">
                <div class="notification is-danger" v-if="hasErrors">
                    {{ form.errors.email }} <br />
                    {{ form.errors.password }}
                </div>

                <form @submit.prevent="submit">
                    <div class="field">
                        <label class="label">Email address</label>
                        <div class="control">
                            <input class="input" type="email" v-model="form.email" />
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input class="input" type="password" v-model="form.password" />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="control">
                            <input type="submit" class="button is-accent is-medium is-fullwidth" value="Log In" />
                        </div>
                    </div>
                </form>
            </div>

            <div class="action-links has-text-centered">
                <p>Forgot password?
                    <inertia-link :href="route('password.request')" class="has-text-weight-medium">Reset</inertia-link>
                </p>

                <p>Need an account?
                    <inertia-link :href="route('register')" class="has-text-weight-medium">Register</inertia-link>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
import Logo from '@/Components/Global/Logo'

export default {
    name: 'Login',
    props: {
        errors: Object,
    },
    components: {
        Logo,
    },
    setup() {
        const form = useForm({
            email: null,
            password: null,
        })

        return { form }
    },
    computed: {
        hasErrors() {
            return this.form.errors.email || this.form.errors.password
        }
    },
    methods: {
        submit() {
            this.form.post(route('login'), {
                preserveScroll: true,
                preserveState: true,
                onFinish: () => this.form.reset('password'),
            })
        }
    }
}
</script>
