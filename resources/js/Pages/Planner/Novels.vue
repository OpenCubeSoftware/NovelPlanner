<template>
    <main-layout>
        <h3>Welcome, {{ $page.props.user.name }}!</h3>
        <div v-if="$page.props.novels && $page.props.novels.length > 0"></div>
        <h1 v-else>No novels</h1>
        <button class="btn btn-danger" @click="logPageProps">Meow</button>
    </main-layout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";

export default {
    name: "Novels.vue",
    components: {MainLayout},
    methods: {
        logPageProps() {
            console.log(this.$page);
        }
    }
}
</script>

<style scoped>

</style>
