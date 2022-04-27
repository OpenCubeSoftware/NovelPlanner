<template>
    <novel-layout>
        <q-page padding>
            <div class="row">
                <div class="text-h4 q-pb-sm col-11">{{ novel.title ?? '(No title given)' }}</div>
                <div class="col-1 edit-icon">
                    <q-btn round color="blue" icon="edit" class="icon-button"
                           :href="route('novels.edit', {novel: novel.id})"/>
                </div>
            </div>
            <div v-if="!isEmpty(novel.subtitle)" class="text-h6 q-py-sm">
                {{ novel.subtitle }}
            </div>
            <div class="subtitle-1 q-py-xs">by {{ novel.author ?? 'Anonymous' }}</div>
            <div class="text-body1 q-py-xs">
                <strong>Description:</strong>
                <p>{{ novel.description }}</p>
            </div>
        </q-page>
    </novel-layout>
</template>

<script setup>
import NovelLayout from "@/Layouts/NovelLayout";
import {isEmpty} from "lodash";
import {defineProps} from "vue";

const props = defineProps({
    novel: Object,
})
</script>

<style scoped>
.edit-icon {
    display: flex;
    justify-content: flex-end;
}

.icon-button {
    align-self: center;
}
</style>
