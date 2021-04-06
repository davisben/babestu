<template>
    <Layout>
        <template v-slot:title>Dashboard</template>

        <template v-slot:content>
            <p>Dashboard</p>
        </template>
    </Layout>
</template>

<script>
import Layout from '@/Layout/Layout'

export default {
    name: 'Dashboard',
    components: {
        Layout,
    },
}
</script>
