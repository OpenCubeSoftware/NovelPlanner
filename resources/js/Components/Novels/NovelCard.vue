<template>
    <q-card>
        <q-card-section>
            <div class="text-h6">
                {{ title ?? 'No title' }}
            </div>
            <div class="text-subtitle2">
                {{
                    author ?? capitalize($page.props.auth.user.name)
                }}
            </div>
        </q-card-section>
        <q-card-section class="q-pt-none">
            {{ description ?? 'No description given' }}
        </q-card-section>
        <q-separator/>
        <q-card-actions vertical>
            <q-btn flat :href="route('novels.show', {novel: novel.id})">View Novel</q-btn>
        </q-card-actions>
    </q-card>
</template>

<script>
import {capitalize} from "lodash";

export default {
    name: "NovelCard",
    props: ['title', 'author', 'description'],
}
</script>

<style scoped>

</style>
