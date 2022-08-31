<script>
export default {
    props: {
        title: String,
    },
}
</script>

<template>
    <button class="px-5 py-2 bg-sky-900 rounded">{{ title ?? "Empty Title" }}</button>
</template>