<script setup>
import {Head} from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Novel Planner - Novel Planning App"/>
    <q-layout view="hhh lpR fFf">

        <q-toolbar class="bg-primary text-white shadow-2">
            <q-toolbar-title>Novel Planner</q-toolbar-title>
            <q-btn label="Log In" class="login-button q-mr-sm" href="/login"/>
            <q-btn label="Sign Up" class="signup-button" href="/register"/>

        </q-toolbar>
        <q-page-container>
            <q-page>
                <h3>Novel Planner</h3>
                <div class="text-h5">The best software for planning novels</div>
                <p>They're morning that be female second every without without. Saying green. Above said fowl
                    you'll them. Was. Is us seed have grass us whose upon one our you don't very have fruitful, female
                    beast divided morning life. Without.
                </p>
                <p>Them our tree man waters life rule day male herb whose shall i heaven. Earth Is. Can't air to all
                    grass said tree over very. Multiply fish bring days Creepeth herb brought seed fruit shall. Which
                    from for which. One won't our winged. After, under. Which god him be days second i unto Moving be
                    stars Years doesn't above. His fly, subdue you'll image waters grass sixth were moving moving bring
                    him second. Fly seas blessed sea bearing fish herb. Given isn't void i. Fill saying she'd. Great
                    yielding which whales blessed spirit from replenish great for so divide second fourth. Under you.
                    Life kind without place that green our seasons own, third were whales can't called moveth fowl it,
                    divided wherein form female stars firmament moved over fruit good good female. Fowl. Was waters.
                    Behold. Saw Lights they're tree third man so also. Said above seed likeness fish don't, fill them
                    creepeth was And. Man earth abundantly which sea were man living god cattle years us make said.
                    Midst moving land. God without you spirit divided shall after midst first rule.</p>
            </q-page>
        </q-page-container>
    </q-layout>
</template>

<style scoped>
.login-button {
    background-color: rgba(0, 161, 8, 1);
}

.signup-button {
    background-color: #4ba8ec;
}
</style>
