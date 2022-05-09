<template>
    <q-dialog v-model="isOpen" persistent>
        <q-card style="min-width: 350px">
            <q-card-section>
                <div class="text-h6">New {{ modelName }}</div>
            </q-card-section>

            <q-card-section class="q-pt-none">
                <q-input dense v-model="title" autofocus @keyup.enter="isOpen = false"/>
            </q-card-section>

            <q-card-actions align="right" class="text-primary">
                <q-btn flat label="Cancel" v-close-popup/>
                <q-btn flat :label="`Add ${modelName}`" @click="onSubmit"/>
            </q-card-actions>
        </q-card>
    </q-dialog>
</template>

<script setup>
import {ref} from 'vue';
import {Inertia} from "@inertiajs/inertia";

const props = defineProps({
    isOpen: Boolean,
    modelName: String,

})

const modelName = ref(props.modelName);


const title = ref('');

const onSubmit = () => {
    Inertia.post(route(`${modelName.value}.create`), {title: title.value});
}

</script>
