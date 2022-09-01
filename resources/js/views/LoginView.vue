<script>
import FormInput from '../components/FormInput.vue';
import PrimaryButton from '../components/PrimaryButton.vue';
import Card from '../components/Card.vue';

export default {
    components: {
        FormInput,
        PrimaryButton,
        Card,
    }
}
</script>

<template>
    <div class="h-full w-full flex justify-center items-center text-white">
        <Card>
            <div class="h-full w-full flex flex-col gap-5">
                <FormInput type="email" title="Email" name="email" />
                <FormInput type="password" title="Password" name="password" />
                <PrimaryButton title="Login" />
            </div>
        </Card>
    </div>
</template>