<script setup>
import {usePage} from '@inertiajs/inertia-vue3';
import {computed, ref} from "vue";
import {Inertia} from "@inertiajs/inertia";
import NewDialogWrapper from "@/Components/Input/NewDialogWrapper";

const user = computed(() => usePage().props.value.auth.user);
const url = computed(() => usePage().props.value.url);

const newNovelOpen = ref(false);
const form = {
    title: ''
}

const openNewNovel = () => {
    newNovelOpen.value = !newNovelOpen.value;
}

function handleLogout() {
    Inertia.post('/logout');
}

function newNovel() {
    Inertia.post(route('novels.create'), form);
}

</script>

<template>
    <q-toolbar class="bg-primary text-white shadow-2">
        <q-toolbar-title shrink>Novel Planner</q-toolbar-title>
        <q-separator dark vertical inset/>
        <q-btn stretch flat label="Home" href="/"/>
        <q-btn stretch flat label="New Novel" @click="openNewNovel"/>

        <q-space/>
        <q-btn-dropdown stretch flat :label="user.name">
            <q-list>
                <q-item clickable v-close-popup tabindex="0" href="#">
                    <q-item-section>
                        <q-item-label>Settings</q-item-label>
                    </q-item-section>
                </q-item>
                <q-item clickable v-close-popup tabindex="0" href="#">
                    <q-item-section>
                        <q-item-label>Profile</q-item-label>
                    </q-item-section>
                </q-item>
                <q-separator inset spaced/>
                <q-item clickable v-close-popup tabindex="0" @click="handleLogout">
                    <q-item-section>
                        <q-item-label>Log out</q-item-label>
                    </q-item-section>
                </q-item>
            </q-list>
        </q-btn-dropdown>

    </q-toolbar>

    <new-dialog-wrapper :is-open="newNovelOpen" model-name="novel" @new-item="newNovel">
        <q-input dense v-model="form.title" autofocus label="Title"/>
    </new-dialog-wrapper>
</template>


