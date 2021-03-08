<template>
    <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
        <div class="container is-max-widescreen">
            <div class="navbar-brand"><Logo /></div>
            <div>
                <form @submit.prevent="$inertia.post(route('logout'))">
                    <button>Log Out</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container is-max-widescreen">
        <slot />
    </div>
</template>

<script>
import Logo from '@/Components/Global/Logo'

export default {
    name: 'Layout',
    components: {
        Logo,
    },
    methods: {
        logout() {
            //this.;
        }
    }
}
</script>
