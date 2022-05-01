<template>
    <novel-layout>
        <q-page padding>
            <div class="text-h5">Editing Novel</div>
            <div class="row">
                <div class="col-xs-12 col-lg-6 q-pt-sm q-pr-sm">
                    <q-input outlined label="Title" v-model="form.title"/>
                </div>
                <div class="col-xs-12 col-lg-6 q-pt-sm q-pr-sm">
                    <q-input outlined label="Subtitle" v-model="form.subtitle"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-6 q-pt-sm q-pr-sm">
                    <q-input outlined label="Author" v-model="form.author"/>
                </div>
                <div class="col-xs-12 col-lg-6 q-pt-sm q-pr-sm">
                    <q-input v-model="form.genre" outlined label="Genre"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 q-pt-sm">Description:</div>
                <div class="col-12 q-py-sm">
                    <q-input v-model="form.description" outlined type="textarea"/>
                </div>
            </div>
            <div class="row">
                <div class="col-11"></div>
                <div class="col-1 submit-button">
                    <q-btn color="primary" label="Save"/>
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

const submit = () => {
    form.put(route('novels.update', {novel: novel.id}),
        {}
    )
}

</script>

<style scoped>
.submit-button {
    display: flex;
    justify-content: flex-end;
}
</style>
