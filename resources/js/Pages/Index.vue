<template>
    <Layout>
        <template v-slot:title>Index</template>

        <template v-slot:content>
            <p>Index</p>
        </template>
    </Layout>
</template>

<script>
import Layout from '@/Layout/Layout'

export default {
    inheritAttrs: false,
    components: {
        Layout,
    },
}
</script>
