<script setup>
import FormInput from '../components/FormInput.vue';
import PrimaryButton from '../components/PrimaryButton.vue';
</script>

<template>
    <div class="h-full w-full flex justify-center items-center text-white">
        <div class="p-10 bg-sky-800 flex flex-col gap-5 rounded">
            <FormInput type="email" title="Email" name="email" />
            <FormInput type="password" title="Password" name="password" />
            <PrimaryButton title="Register" />
        </div>
    </div>
</template>