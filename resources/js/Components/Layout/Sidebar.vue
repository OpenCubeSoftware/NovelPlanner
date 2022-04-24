<template>
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-4">Novel Planner</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <Link
                    class="nav-link"
                    :class="{'active': $page.component.startsWith('Novels/Novel')}"
                    :href="route('novels.show', {novel: $page.props?.novel})"
                >
                    <i class="bi bi-house-door" style="font-size: 1rem;"
                       :style="{color: $page.component.startsWith('Novels/Novel') ? '#ffffff' : '#000000'}"/>
                    Home
                </Link>
            </li>
            <li>
                <Link href="#" class="nav-link link-dark">
                    <i class="bi bi-people" style="font-size: 2rem; color: #ffffff;"/>
                    Characters
                </Link>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-map" style="font-size: 2rem; color: #ffffff;"/>
                    Locations
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <i class="bi bi-card-list" style="font-size: 2rem; color: #ffffff;"/>
                    Items
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">

                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
               id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>{{ user.name }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
import {usePage} from '@inertiajs/inertia-vue3';
import {computed} from "vue";
import {Link} from "@inertiajs/inertia-vue3";

export default {
    setup() {
        const user = computed(() => usePage().props.value.auth.user);
        const novel = computed(() => usePage().props.value?.novel);
        return {user, novel}
    },
    components: {Link},
    methods: {
        logNovel() {
            console.log(this.novel);
        }
    },
    name: "Sidebar"
}
</script>

<style scoped>
b-example-divider {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.bi {
    vertical-align: -.125em;
    pointer-events: none;
    fill: currentColor;
}

.dropdown-toggle {
    outline: 0;
}

.nav-flush .nav-link {
    border-radius: 0;
}

.btn-toggle {
    display: inline-flex;
    align-items: center;
    padding: .25rem .5rem;
    font-weight: 600;
    color: rgba(0, 0, 0, .65);
    background-color: transparent;
    border: 0;
}

.btn-toggle:hover,
.btn-toggle:focus {
    color: rgba(0, 0, 0, .85);
    background-color: #d2f4ea;
}

.btn-toggle::before {
    width: 1.25em;
    line-height: 0;
    content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
    transition: transform .35s ease;
    transform-origin: .5em 50%;
}

.btn-toggle[aria-expanded="true"] {
    color: rgba(0, 0, 0, .85);
}

.btn-toggle[aria-expanded="true"]::before {
    transform: rotate(90deg);
}

.btn-toggle-nav a {
    display: inline-flex;
    padding: .1875rem .5rem;
    margin-top: .125rem;
    margin-left: 1.25rem;
    text-decoration: none;
}

.btn-toggle-nav a:hover,
.btn-toggle-nav a:focus {
    background-color: #d2f4ea;
}

.scrollarea {
    overflow-y: auto;
}

.fw-semibold {
    font-weight: 600;
}

.lh-tight {
    line-height: 1.25;
}

</style>
