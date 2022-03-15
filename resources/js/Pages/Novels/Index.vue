<template>
    <main-layout>
        <h3>Welcome, {{ $page.props.auth.user.name }}!</h3>
        <div v-if="$page.props.novels && $page.props.novels.length > 0">
            <div v-for="novel in $page.props.novels" class="row justify-content-center">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ novel.title ?? 'No title' }}</h5>
                            <h6>{{ novel.author ?? capitalize($page.props.auth.user.name) }}</h6>
                            <p class="card-text">{{ novel.description ?? 'No description' }}</p>
                            <a :href="route('novels.show', {novel: novel.id})" class="btn btn-primary">View Novel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 v-else>No novels! Why not <a href="/novels/new">create one?</a></h4>
    </main-layout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import {capitalize} from "lodash";


export default {
    name: "NovelIndex",
    components: {MainLayout},
    methods: {}
}
</script>

<style scoped>

</style>
