<script setup>
import BreezeApplicationLogo from '@/ComponentsAuth/ApplicationLogo.vue';
import {Link} from '@inertiajs/inertia-vue3';
</script>

<template>
    <q-layout view="hHh lpR fFf">

        <q-page-container class="pg-container">
            <slot/>
        </q-page-container>

    </q-layout>
</template>

<style scoped>
.pg-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #e9e9e9;
}
</style>
<!--<template>-->
<!--    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">-->
<!--        <div>-->
<!--            <Link href="/">-->
<!--                <BreezeApplicationLogo class="w-20 h-20 fill-current text-gray-500"/>-->
<!--            </Link>-->
<!--        </div>-->

<!--        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">-->
<!--            <slot/>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->
