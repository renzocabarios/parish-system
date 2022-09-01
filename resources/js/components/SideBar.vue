<script>
import SideBarLink from './SideBarLink.vue';
export default {
    data() {
        return { links: [{ title: "Home" }, { title: "Certificate" }, { title: "Marriage" }, { title: "Users" }] }
    },
    components: { SideBarLink }
}
</script>

<template>
    <div class="sidenav gap-5 justify-items-center h-full w-full bg-gray-900">
        <div class="w-full flex justify-center items-center py-5">
            <h1 class="text-2xl font-bold">Parish System</h1>
        </div>
        <div class="w-full flex flex-col gap-2 px-6">
            <SideBarLink v-for="(link, index) in links" :title="link.title" :key="index" />
        </div>
        <div class="w-full text-center ">
            <h1 class="text-xl p-5 hover:p-6 hover:bg-sky-700 transition-all rounded">Logout</h1>
        </div>
    </div>
</template>

<style scoped>
.sidenav {
    display: grid;
    grid-template-rows: max-content auto max-content;
}
</style>