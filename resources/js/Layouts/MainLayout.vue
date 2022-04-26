<template>
    <q-layout view="hhh lpR fFf">
        <navbar/>
        <q-page-container>
            <slot/>
        </q-page-container>

    </q-layout>
</template>

<script setup>
import Navbar from "@/Components/Layout/Navbar";
</script>
