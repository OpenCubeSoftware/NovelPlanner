<template>
    <novel-layout>
        <q-page padding>
            <div class="text-h5">Editing Novel</div>
            <div class="row">
                <div class="col-12">
                    <q-input outlined label="Title" v-model="form.title"/>
                </div>
            </div>
        </q-page>
    </novel-layout>
</template>

<script setup>
import NovelLayout from "@/Layouts/NovelLayout";
import {useForm} from "@inertiajs/inertia-vue3";

const props = defineProps({
    novel: Object
})

const form = useForm({
    title: props.novel.title ?? '',
    subtitle: props.novel.subtitle ?? '',
    author: props.novel.author ?? '',
    description: props.novel.description ?? '',
    genre: props.novel.genre ?? '',
})
</script>

<style scoped>

</style>
