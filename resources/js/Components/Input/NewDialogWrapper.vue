<template>
    <q-dialog v-model="isOpen" persistent>
        <q-card style="min-width: 350px">
            <q-card-section>
                <div class="text-h6">New {{ modelName }}</div>
            </q-card-section>

            <q-card-section class="q-pt-none">
                <slot/>
            </q-card-section>

            <q-card-actions align="right" class="text-primary">
                <q-btn flat label="Cancel" v-close-popup/>
                <q-btn flat :label="`Add ${modelName}`" @click="$emit('newItem')"/>
            </q-card-actions>
        </q-card>
    </q-dialog>
</template>

<script setup>
import {ref} from 'vue';

const props = defineProps({
    isOpen: Boolean,
    modelName: String,

})

const modelName = ref(props.modelName);

const title = ref('');
</script>
