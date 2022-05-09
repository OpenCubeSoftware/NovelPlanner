<script setup>
import MainLayout from "@/Layouts/MainLayout";
import NovelCard from "@/Components/Novels/NovelCard";
import {defineProps, ref} from "vue";
import {Inertia} from "@inertiajs/inertia";

const props = defineProps({
    novels: Array,
    auth: {
        user: Object
    }
})

const userName = ref(props.auth.user.name);

const viewNovel = (novelId) => {
    Inertia.visit(route('novels.show', {novel: novelId}));
}

</script>

<template>
    <main-layout>
        <q-page padding>
            <div class="text-h4">Welcome, {{ userName }}!</div>
            <div class="text-h5" v-if="novels && novels.length > 0">Your novels:</div>
            <div v-if="novels && novels.length > 0">
                <div v-for="novel in novels" class="row">
                    <div class="q-py-sm col-12">
                        <novel-card :novel="novel" @novel-selected="(id) => viewNovel(id)"/>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="row">
                    <div class="col-12">
                        No novels yet!
                    </div>
                </div>
            </div>
            <!-- </div>-->
        </q-page>
    </main-layout>
</template>
<style scoped>
.novels {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
</style>
<!--{{ $page.props.auth.user.name }}-->
<!--{{ $page.props.auth.user.name }}-->
<!--<div v-if="$page.props.novels && $page.props.novels.length > 0">-->
