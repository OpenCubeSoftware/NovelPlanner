<script setup>
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import Banner from '@/Components/Info/Banner.vue'
import {isEmpty} from "lodash";
import BreezeValidationErrors from '@/ComponentsAuth/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import {ref} from 'vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
    errors: Object,

});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const isPwd = ref(true);

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

</script>

<template>
    <BreezeGuestLayout>
        <Head title="Log in"/>

        <q-card class="card">
            <q-card-section>
                <div class="text-h5 heada">Log In</div>
                <banner type="error" v-if="!isEmpty(errors)">
                    <BreezeValidationErrors/>
                    <div v-if="status">
                        {{ status }}
                    </div>
                </banner>
            </q-card-section>
            <q-card-section class="q-gutter-y-md">
                <form @submit.prevent="submit" class="formDisplay">
                    <q-input outlined type="email" v-model="form.email" label="Email" autofocus/>
                    <q-input v-model="form.password" outlined :type="isPwd ? 'password' : 'text'" label="Password">
                        <template v-slot:append>
                            <q-icon
                                :name="isPwd ? 'visibility_off' : 'visibility'"
                                class="cursor-pointer"
                                @click="isPwd = !isPwd"
                            />
                        </template>
                    </q-input>
                    <div><a href="/forgot-password">Forgot your password?</a></div>
                    <q-checkbox v-model="form.remember" label="Remember me?"/>
                    <div>Don't have an account? <a href="/register">Sign up!</a></div>
                    <q-btn color="primary" label="Log in" :disable="isEmpty(form.email) && isEmpty(form.password)"
                           @click="submit"/>
                </form>
            </q-card-section>
        </q-card>
    </BreezeGuestLayout>
</template>

<style scoped>
a {
    text-decoration: none;
    color: #0f80ff;
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

.card {
    width: 320px;
}
</style>
