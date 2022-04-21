<script>
import {usePage, Link} from '@inertiajs/inertia-vue3';
import {computed} from "vue";
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "Navbar",
    components: {Link},
    setup() {
        const user = computed(() => usePage().props.value.auth.user);
        const url = computed(() => usePage().props.value.url);
        return {user, url};
    },
    methods: {
        handleLogout() {
            Inertia.post('/logout')
        },
        logUrl() {
            console.log(url);
        }
    }

}
</script>

<template>
    <q-toolbar class="bg-primary text-white shadow-2">
        <q-toolbar-title shrink>Novel Planner</q-toolbar-title>
        <q-separator dark vertical inset/>
        <q-btn stretch flat label="Meow"/>
        <q-btn stretch flat label="Purr"/>

        <q-space/>
        <q-btn stretch flat label="Link"/>
        <q-btn stretch flat label="Link"/>
        <q-btn-dropdown stretch flat :label="user.name">
            <q-list>
                <q-item-label header>Folders</q-item-label>
                <q-item v-for="n in 3" :key="`x.${n}`" clickable v-close-popup tabindex="0">
                    <q-item-section avatar>
                        <q-avatar icon="folder" color="secondary" text-color="white"/>
                    </q-item-section>
                    <q-item-section>
                        <q-item-label>Photos</q-item-label>
                        <q-item-label caption>February 22, 2016</q-item-label>
                    </q-item-section>
                    <q-item-section side>
                        <q-icon name="info"/>
                    </q-item-section>
                </q-item>
                <q-separator inset spaced/>
                <q-item-label header>Files</q-item-label>
                <q-item v-for="n in 3" :key="`y.${n}`" clickable v-close-popup tabindex="0">
                    <q-item-section avatar>
                        <q-avatar icon="assignment" color="primary" text-color="white"/>
                    </q-item-section>
                    <q-item-section>
                        <q-item-label>Vacation</q-item-label>
                        <q-item-label caption>February 22, 2016</q-item-label>
                    </q-item-section>
                    <q-item-section side>
                        <q-icon name="info"/>
                    </q-item-section>
                </q-item>
            </q-list>
        </q-btn-dropdown>

    </q-toolbar>
</template>


