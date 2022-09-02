<script>
import PrimaryButton from './PrimaryButton.vue';

export default {
    components: {
        PrimaryButton
    },
}
</script>

<template>
    <table class="rounded-lg w-full text-base border-collapse shadow-md">
        <thead>
            <tr class="rounded-lg text-center bg-gray-900 text-white text-lg">
                <th class="p-3">Name</th>
                <th class="p-3">Points</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center border-y-2 border-gray-600 bg-gray-800  hover:bg-gray-700 transition-all">
                <td class="p-3">Dom</td>
                <td class="p-3">6000</td>
                <td class="p-3">
                    <PrimaryButton title="Edit" />
                    <PrimaryButton title="Delete" />
                </td>

            </tr>
            <tr class="text-center border-y-2 border-gray-600 bg-gray-800  hover:bg-gray-700 transition-all">
                <td class="p-3">Melissa</td>
                <td class="p-3">6000</td>
                <td class="p-3">
                    <PrimaryButton title="Edit" />
                    <PrimaryButton title="Delete" />
                </td>
            </tr>
        </tbody>
    </table>
</template>


<style scoped>
</style>