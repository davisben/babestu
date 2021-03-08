<template>
    <div class="auth-container hero is-fullheight columns">
        <div class="column is-10-mobile is-8-tablet is-4-desktop is-offset-1-mobile is-offset-2-tablet is-offset-4-desktop hero-body">
            <Logo />

            <div class="panel">
                <div class="notification is-danger" v-if="form.errors.email">
                    {{ form.errors.email }}
                </div>

                <form @submit.prevent="form.post(route('password.email'))">
                    <div class="field">
                        <label class="label">Email address</label>
                        <div class="control">
                            <input class="input" type="email" v-model="form.email" />
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
    name: 'ForgotPassword',
    props: {
        errors: Object,
    },
    components: {
        Logo,
    },
    setup() {
        const form = useForm({
            email: null,
        })

        return { form }
    }
}
</script>
