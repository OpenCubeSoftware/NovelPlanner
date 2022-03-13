<template>
    <navbar/>
    <div class="container mx-auto">
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
