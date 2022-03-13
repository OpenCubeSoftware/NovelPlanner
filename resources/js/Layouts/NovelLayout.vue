<template>
    <main>
        <sidebar/>
        <div class="container mx-auto">
            <slot/>
        </div>
    </main>
</template>

<script>
import Sidebar from "@/Components/Sidebar";

export default {
    components: {Sidebar},
    name: "NovelLayout"
}
</script>

<style scoped>
main {
    display: flex;
    flex-wrap: nowrap;
    height: 100vh;
    height: -webkit-fill-available;
    max-height: 100vh;
    overflow-x: auto;
    overflow-y: hidden;
}
</style>
