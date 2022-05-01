<template>
    <q-drawer v-model="leftDrawerOpen" side="left" bordered>
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
</template>

<script setup>
import {usePage} from '@inertiajs/inertia-vue3';
import {ref, computed} from "vue";

const props = defineProps({
    showSidebar: Boolean
})

const leftDrawerOpen = ref(props.showSidebar);

const user = computed(() => usePage().props.value.auth.user);
const novel = computed(() => usePage().props.value?.novel);

</script>

<style scoped>
strong {
    font-size: 16px;
}

</style>
