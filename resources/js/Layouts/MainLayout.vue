<template>
    <navbar/>
    <div class="container mx-auto pt-3">
        <slot/>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";

export default {
    name: "MainLayout",
    components: {Navbar},

}
</script>
