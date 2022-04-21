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
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";

export default {
    name: "MainLayout",
    components: {Navbar, Footer},

}
</script>
