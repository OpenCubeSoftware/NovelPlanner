<template>
    <novel-layout>
        <h1>{{ novel.title ?? 'Meow' }}</h1>
    </novel-layout>
</template>

<script>
import NovelLayout from "@/Layouts/NovelLayout";

export default {
    name: "NovelShow",
    components: {NovelLayout},
    props: ['novel'],
}
</script>

<style scoped>

</style>
