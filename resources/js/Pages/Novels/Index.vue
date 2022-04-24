<template>
    <main-layout>
        <q-page padding>la
            <h5>Welcome, {{ $page.props.auth.user.name }}!</h5>
            <div v-if="$page.props.novels && $page.props.novels.length > 0">
                <!--                <div v-for="novel in $page.props.novels" class="row">-->
                <novel-card title="Meow" author="Big Purrs Machine"
                            description="The cat sez meow meow meow meow meow meow meow meow meow meow meow meow meow"/>
            </div>
            <!--            </div>-->
        </q-page>
    </main-layout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import NovelCard from "@/Components/Novels/NovelCard";

export default {
    name: "NovelIndex",
    components: {MainLayout, NovelCard},
    methods: {
        meow() {
            alert("Meow!!!!");
        }
    }
}
</script>

<style scoped>

</style>
