<template>
    <div class="auth-container hero is-fullheight columns">
        <div class="column is-10-mobile is-8-tablet is-4-desktop is-offset-1-mobile is-offset-2-tablet is-offset-4-desktop hero-body">
            <Logo />

            <div class="panel">
                <form @submit.prevent="submit">
                    <div class="field">
                        <label class="label">Email address</label>
                        <div class="control">
                            <input :class="form.errors.email ? 'is-danger' : ''" class="input" type="email" v-model="form.email" />
                            <p class="help is-danger" v-if="form.errors.email">{{ form.errors.email }}</p>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control">
                            <input :class="form.errors.password ? 'is-danger' : ''" class="input" type="password" v-model="form.password" />
                            <p class="help is-danger" v-if="form.errors.password">{{ form.errors.password }}</p>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Confirm password</label>
                        <div class="control">
                            <input :class="form.errors.password_confirm ? 'is-danger' : ''" class="input" type="password" v-model="form.password_confirm" />
                            <p class="help is-danger" v-if="form.errors.password_confirm">{{ form.errors.password_confirm }}</p>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="control">
                            <input type="submit" class="button is-accent is-medium is-fullwidth" value="Reset password" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
import Logo from '@/Components/Global/Logo'

export default {
    name: 'ResetPassword',
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
            password_confirm: null,
        })

        return { form }
    },
    methods: {
        submit() {
            this.form.post(route('password.update'), {
                preserveScroll: true,
                preserveState: true,
                onFinish: () => this.form.reset('password', 'password_confirm'),
            })
        }
    }
}
</script>
