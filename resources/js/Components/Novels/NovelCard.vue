<script setup>
import {defineProps} from 'vue';

const props = defineProps({
    novel: Object
})

</script>

<template>
    <q-card>
        <q-card-section>
            <div class="text-h6">
                {{ novel.title ?? 'No title' }}
            </div>
            <div class="text-subtitle2">
                {{
                    novel.author
                }}
            </div>
        </q-card-section>
        <q-card-section class="q-pt-none">
            {{ novel.description ?? 'No description given' }}
        </q-card-section>
        <q-separator/>
        <q-card-actions vertical>
            <q-btn flat @click="$emit('novelSelected', novel.id)">View Novel</q-btn>
        </q-card-actions>
    </q-card>
</template>
<style scoped>

</style>

