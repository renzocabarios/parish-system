<script>
export default {
    props: {
        type: String,
        name: String,
        title: String,
    },
}
</script>

<template>
    <div class="flex flex-col">
        <label class="text-white" :for="name ?? 'default'">{{ title ?? "Empty Title" }}</label>
        <input class="text-black p-2 rounded" :type="type ?? 'text'" :name="name ?? 'default'">
    </div>
</template>