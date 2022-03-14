<script>
import {usePage, Link} from '@inertiajs/inertia-vue3';
import {computed} from "vue";
import {Inertia} from "@inertiajs/inertia";

export default {
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Novel Planner</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link class="nav-link" :class="{'active': $page.component === 'Planner/Novels'}"
                              aria-current="page" href="/">Home
                        </Link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">New Novel</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false"> {{ user.name }} </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><span class="dropdown-item" @click="logUrl">Meow</span></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" @click="handleLogout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>


<style scoped>

</style>
