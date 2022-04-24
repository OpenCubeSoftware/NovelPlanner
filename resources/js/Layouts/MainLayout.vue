<template>
    <q-layout view="hhh lpR fFf">
        <navbar/>
        <q-page-container>
            <slot/>
        </q-page-container>
        <footer/>
    </q-layout>
</template>

<script>
import Navbar from "@/Components/Layout/Navbar";
import Footer from "@/Components/Layout/Footer";

export default {
    name: "MainLayout",
    components: {Navbar, Footer},

}
</script>
