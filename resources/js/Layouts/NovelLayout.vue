<template>
    <q-layout view="hHh LpR fff">

        <q-header elevated class="bg-primary text-white">
            <q-toolbar class="bg-primary text-white shadow-2">
                <q-btn
                    v-if="!isLargeScreen"
                    dense
                    flat
                    round
                    icon="menu"
                    @click="toggleLeftDrawer"
                />
                <q-toolbar-title>Novel Planner</q-toolbar-title>
            </q-toolbar>
        </q-header>
        <q-drawer v-model="leftDrawerOpen" show-if-above :breakpoint="990" side="left" bordered>
            <q-list>
                <q-item>
                    <q-item-section>
                        <strong>{{ novel.title }}</strong>
                    </q-item-section>
                </q-item>
                <q-separator/>
                <q-item clickable v-ripple :href="'https://icanhas.cheezburger.com'">
                    <q-item-section avatar>
                        <q-icon color="blue" name="menu_book"/>
                    </q-item-section>
                    <q-item-section>Chapters</q-item-section>
                </q-item>
                <q-item clickable v-ripple :href="'https://icanhas.cheezburger.com'">
                    <q-item-section avatar>
                        <q-icon color="blue" name="group"/>
                    </q-item-section>
                    <q-item-section>Characters</q-item-section>
                </q-item>
                <q-item clickable v-ripple :href="'https://icanhas.cheezburger.com'">
                    <q-item-section avatar>
                        <q-icon color="blue" name="colorize"/>
                    </q-item-section>
                    <q-item-section>Items</q-item-section>
                </q-item>
                <q-item clickable v-ripple :href="'https://icanhas.cheezburger.com'">
                    <q-item-section avatar>
                        <q-icon color="blue" name="map"/>
                    </q-item-section>
                    <q-item-section>Locations</q-item-section>
                </q-item>
            </q-list>
        </q-drawer>


        <q-page-container>

            <slot/>
        </q-page-container>


    </q-layout>
</template>

<script setup>
import {ref} from 'vue';
import Sidebar from '@/Components/Layout/Sidebar.vue';
import {useMediaQuery} from '@vueuse/core'
import {usePage} from "@inertiajs/inertia-vue3";

const isLargeScreen = useMediaQuery('(min-width: 1079px)')

let leftDrawerOpen = ref(true);

const user = ref(usePage().props.value.auth.user);
const novel = ref(usePage().props.value?.novel);

function toggleLeftDrawer() {
    leftDrawerOpen = !leftDrawerOpen;
}
</script>
