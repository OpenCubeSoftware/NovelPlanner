How
<script setup>
import BreezeButton from '@/ComponentsAuth/Button.vue';
import BreezeCheckbox from '@/ComponentsAuth/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/ComponentsAuth/Input.vue';
import BreezeLabel from '@/ComponentsAuth/Label.vue';
import BreezeValidationErrors from '@/ComponentsAuth/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

</script>

<template>
    <BreezeGuestLayout>
        <Head title="Log in"/>

        <q-card>
            <q-card-section>
                <BreezeValidationErrors class="mb-4"/>

                <div v-if="status">
                    {{ status }}
                </div>
            </q-card-section>
            <q-card-section>
                <form @submit.prevent="submit">
                    <q-input outlined type="email" v-model="form.email" label="Email" autofocus/>
                    <q-input v-model="form.password" filled :type="isPwd ? 'password' : 'text'"
                             hint="Password with toggle">
                        <template v-slot:append>
                            <q-icon
                                :name="isPwd ? 'visibility_off' : 'visibility'"
                                class="cursor-pointer"
                                @click="isPwd = !isPwd"
                            />
                        </template>
                    </q-input>

                    <!--            <div>-->
                    <!--                <BreezeLabel for="email" value="Email"/>-->
                    <!--                <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus-->
                    <!--                             autocomplete="username"/>-->
                    <!--            </div>-->

                    <!--            <div class="mt-4">-->
                    <!--                <BreezeLabel for="password" value="Password"/>-->
                    <!--                <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required-->
                    <!--                             autocomplete="current-password"/>-->
                    <!--            </div>-->

                    <!--                    <div class="block mt-4">-->
                    <!--                        <label class="flex items-center">-->
                    <!--                            <BreezeCheckbox name="remember" v-model:checked="form.remember"/>-->
                    <!--                            <span class="ml-2 text-sm text-gray-600">Remember me</span>-->
                    <!--                        </label>-->
                    <!--                    </div>-->

                    <!--                    <div class="flex items-center justify-end mt-4">-->
                    <!--                        <Link v-if="canResetPassword" :href="route('password.request')"-->
                    <!--                              class="underline text-sm text-gray-600 hover:text-gray-900">-->
                    <!--                            Forgot your password?-->
                    <!--                        </Link>-->

                    <!--                        <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }"-->
                    <!--                                      :disabled="form.processing">-->
                    <!--                            Log in-->
                    <!--                        </BreezeButton>-->
                    <!--                    </div>-->
                </form>
            </q-card-section>
        </q-card>
    </BreezeGuestLayout>
</template>
