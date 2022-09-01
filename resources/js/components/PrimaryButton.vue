<script>
export default {
    props: {
        title: String,
    },
}
</script>

<template>
    <button
        class="shadow-md rounded-md px-7 py-3 bg-gray-900 hover:bg-black transition-all text-white font-bold text-lg">{{
        title ?? "Empty Title" }}</button>
</template>