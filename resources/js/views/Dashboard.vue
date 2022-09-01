<script>
import SideBar from '../components/SideBar.vue';

export default {
    components: {
        SideBar
    }
}
</script>

<template>
    <div class="h-full w-full main text-white">
        <SideBar />
        <div class="bg-white">
            <!-- Put the body here -->
        </div>
    </div>
</template>

<style scoped>
.main {
    display: grid;
    grid-template-columns: 13rem auto;
}
</style>