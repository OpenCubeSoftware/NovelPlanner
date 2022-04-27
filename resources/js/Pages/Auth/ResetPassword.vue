<script setup>
import BreezeButton from '@/ComponentsAuth/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import {isEmpty} from "lodash";
import BreezeValidationErrors from '@/ComponentsAuth/ValidationErrors.vue';
import {Head, useForm} from '@inertiajs/inertia-vue3';
import {ref} from 'vue';

const props = defineProps({
    email: String,
    token: String,
    status: String
});

let isPwd = ref(true);
let isCPwd = ref(true);

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});


const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Reset Password"/>

        <q-card class="card">
            <q-card-section>
                <div class="text-h5 heada">Reset Password</div>
                <banner type="error" v-if="!isEmpty(errors)">
                    <BreezeValidationErrors/>
                    <div v-if="status">
                        {{ status }}
                    </div>
                </banner>
            </q-card-section>
            <q-card-section>
                <div class="text-body1 q-pb-sm">
                    Enter your new password.
                </div>
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
                    <q-input v-model="form.password_confirmation" outlined :type="isCPwd ? 'password' : 'text'"
                             label="Confirm Password">
                        <template v-slot:append>
                            <q-icon
                                :name="isCPwd ? 'visibility_off' : 'visibility'"
                                class="cursor-pointer"
                                @click="isCPwd = !isCPwd"
                            />
                        </template>
                    </q-input>
                    <q-btn color="primary" label="Reset Password" @click="submit"/>
                </form>
            </q-card-section>
        </q-card>
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

<!--            <div>-->
<!--                <BreezeLabel for="email" value="Email"/>-->
<!--                <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus-->
<!--                             autocomplete="username"/>-->
<!--            </div>-->

<!--            <div class="mt-4">-->
<!--                <BreezeLabel for="password" value="Password"/>-->
<!--                <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required-->
<!--                             autocomplete="new-password"/>-->
<!--            </div>-->

<!--            <div class="mt-4">-->
<!--                <BreezeLabel for="password_confirmation" value="Confirm Password"/>-->
<!--                <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full"-->
<!--                             v-model="form.password_confirmation" required autocomplete="new-password"/>-->
<!--            </div>-->

<!--            <div class="flex items-center justify-end mt-4">-->
<!--                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">-->
<!--                    Reset Password-->
<!--                </BreezeButton>-->
<!--            </div>-->
