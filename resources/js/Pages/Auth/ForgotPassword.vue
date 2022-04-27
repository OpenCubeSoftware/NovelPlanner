<script setup>
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeValidationErrors from '@/ComponentsAuth/ValidationErrors.vue';
import Banner from '@/Components/Info/Banner.vue';
import {Head, useForm} from '@inertiajs/inertia-vue3';
import {isEmpty} from "lodash";

defineProps({
    status: String,
    errors: Object,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Forgot Password"/>

        <q-card class="card">
            <q-card-section>
                <div class="text-h5 heada">Forgot Password?</div>
                <banner type="error" v-if="!isEmpty(errors)">
                    <BreezeValidationErrors/>
                    <div v-if="status">
                        {{ status }}
                    </div>
                </banner>
            </q-card-section>
            <q-card-section>
                <div class="text-body1 q-pb-sm">
                    Forgot your password? Enter your email to reset it.
                </div>
                <form @submit.prevent="submit" class="formDisplay">
                    <q-input outlined type="email" v-model="form.email" label="Email" autofocus/>
                    <q-btn color="primary" label="Email Reset Password Link" @click="submit"/>
                </form>
            </q-card-section>
        </q-card>

        <!--        <div class="mb-4 text-sm text-gray-600">-->
        <!--            Forgot your password? No problem. Just let us know your email address and we will email you a password reset-->
        <!--            link that will allow you to choose a new one.-->
        <!--        </div>-->

        <!--        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">-->
        <!--            {{ status }}-->
        <!--        </div>-->

        <!--        <BreezeValidationErrors class="mb-4"/>-->

        <!--        <form @submit.prevent="submit">-->
        <!--            <div>-->
        <!--                <BreezeLabel for="email" value="Email"/>-->
        <!--                <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus-->
        <!--                             autocomplete="username"/>-->
        <!--            </div>-->

        <!--            <div class="flex items-center justify-end mt-4">-->
        <!--                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">-->
        <!--                    Email Password Reset Link-->
        <!--                </BreezeButton>-->
        <!--            </div>-->
        <!--        </form>-->
    </BreezeGuestLayout>
</template>

<style scoped>
.card {
    width: 320px;
}

.formDisplay {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 0px;
}

.heada {
    text-align: center;
}

</style>
