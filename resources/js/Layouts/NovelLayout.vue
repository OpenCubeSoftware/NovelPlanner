<template>
    <q-layout view="hHh lpR fFf">

        <q-header elevated class="bg-primary text-white">
            <q-toolbar>
                <q-btn dense flat round :icon="leftDrawerOpen ? 'chevron_left' : 'chevron_right'"
                       @click="toggleLeftDrawer"/>

                <q-toolbar-title>
                    Novel Planner
                </q-toolbar-title>
            </q-toolbar>
        </q-header>

        <q-drawer show-if-above v-model="leftDrawerOpen" side="left" bordered>
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

<script>
import {ref} from 'vue'
import {usePage} from "@inertiajs/inertia-vue3";

export default {
    setup() {
        const leftDrawerOpen = ref(false)
        // const user = ref(usePage().props.value.auth.user);
        const novel = ref(usePage().props.value?.novel);
        return {
            leftDrawerOpen,
            toggleLeftDrawer() {
                leftDrawerOpen.value = !leftDrawerOpen.value
            },
            novel: novel,
        }
    }
}
</script>
