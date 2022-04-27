<template>
    <q-layout view="hHh LpR fff">

        <q-header elevated class="bg-primary text-white">
            <q-toolbar class="bg-primary text-white shadow-2">
                <q-toolbar-title>Novel Planner</q-toolbar-title>
            </q-toolbar>
        </q-header>
        <sidebar/>


        <q-page-container>
            <slot/>
        </q-page-container>


    </q-layout>
</template>

<script setup>
import {ref} from 'vue';
import Sidebar from '@/Components/Layout/Sidebar.vue';

const leftDrawerOpen = ref(true);

function toggleLeftDrawer() {
    leftDrawerOpen.value = !leftDrawerOpen.value;
}
</script>
