<template>
    <nav class="menu has-background-white has-shadow">
        <logo compact="true" />

        <ul class="menu-list">
            <li>
                <inertia-link :href="route('dashboard')" title="Dashboard">
                    <i class="fas fa-desktop is-size-3"></i>
                </inertia-link>
            </li>
        </ul>
    </nav>

    <div class="navbar is-transparent">
        <div class="container is-max-widescreen">
            <div class="navbar-start">
                <h1 class="page-title"><slot name="title" /></h1>
            </div>

            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-arrowless">
                        <i class="far fa-user-circle has-text-primary is-size-2"></i>
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item is-size-6" @click.prevent="$inertia.post(route('logout'))">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container is-max-widescreen">
        <slot name="content" />
    </div>
</template>

<script>
import Logo from '@/Components/Global/Logo'

export default {
    name: 'Layout',
    components: {
        Logo,
    }
}
</script>
