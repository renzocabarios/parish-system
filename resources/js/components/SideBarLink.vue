<script>
export default {
    props: {
        title: String,
    },
}
</script>

<template>
    <h1 class="text-xl px-4 py-2 hover:py-3 hover:px-5 hover:bg-sky-700 transition-all rounded">{{ title }}</h1>
</template>

<style scoped>
</style>