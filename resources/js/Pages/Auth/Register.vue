<script setup>
import BreezeButton from '@/ComponentsAuth/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/ComponentsAuth/Input.vue';
import BreezeLabel from '@/ComponentsAuth/Label.vue';
import BreezeValidationErrors from '@/ComponentsAuth/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import {defineProps, ref} from "vue";
import {isEmpty} from "lodash";
import Banner from '@/Components/Info/Banner.vue';

defineProps({
    errors: Object,
})

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const isPwd = ref(true);
const isCPwd = ref(true);

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Register"/>
        <q-card class="card">
            <q-card-section>
                <div class="text-h5 heada">Register</div>
                <banner type="error" v-if="!isEmpty(errors)">
                    <BreezeValidationErrors/>
                </banner>
            </q-card-section>

            <q-card-section class="q-gutter-y-md">
                <form @submit.prevent="submit" class="formDisplay">
                    <q-input outlined type="text" v-model="form.name" label="Name" autofocus/>
                    <q-input outlined type="email" v-model="form.email" label="Email"/>
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
                    <div>Already have an account? <a href="/login">Log in</a></div>
                    <q-btn color="primary" label="Log in" @click="submit"/>
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


<!--<div>-->
<!--<BreezeLabel for="name" value="Name"/>-->
<!--<BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required-->
<!--             autofocus-->
<!--             autocomplete="name"/>-->
<!--</div>-->

<!--<div class="mt-4">-->
<!--<BreezeLabel for="email" value="Email"/>-->
<!--<BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required-->
<!--             autocomplete="username"/>-->
<!--</div>-->

<!--<div class="mt-4">-->
<!--<BreezeLabel for="password" value="Password"/>-->
<!--<BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password"-->
<!--             required-->
<!--             autocomplete="new-password"/>-->
<!--</div>-->

<!--<div class="mt-4">-->
<!--<BreezeLabel for="password_confirmation" value="Confirm Password"/>-->
<!--<BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full"-->
<!--             v-model="form.password_confirmation" required autocomplete="new-password"/>-->
<!--</div>-->

<!--<div class="flex items-center justify-end mt-4">-->
<!--<Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">-->
<!--    Already registered?-->
<!--</Link>-->

<!--<BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }"-->
<!--              :disabled="form.processing">-->
<!--    Register-->
<!--</BreezeButton>-->
<!--</div>-->
