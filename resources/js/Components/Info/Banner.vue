<script setup>
import {defineProps} from 'vue';

const props = defineProps({
    type: String
})

</script>

<template>
    <q-banner :class="`q-mt-md banner-${type ?? 'none'}`">
        <slot/>
    </q-banner>
</template>
<style scoped>


.banner-none {
    background-color: #999fac;
}

.banner-info {
    border: 3px solid rgba(40, 140, 255, 1);
    background-color: rgba(40, 140, 255, 0.25);
    border-radius: 5px;
}

.banner-success {
    border: 3px solid rgba(0, 161, 8, 1);
    background-color: rgba(0, 161, 8, 0.3);
    border-radius: 5px;
}

.banner-warning {
    border: 3px solid rgba(255, 141, 0, 1);
    background-color: rgba(255, 141, 0, 0.3);
    border-radius: 5px;
}

.banner-error {
    border: 3px solid rgba(239, 12, 12, 1);
    background-color: rgba(239, 12, 12, 0.2);
    border-radius: 5px;
}


</style>
