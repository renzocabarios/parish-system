<script>
import SideBar from '../components/SideBar.vue';
import DataTable from '../components/DataTable.vue';

export default {
    components: {
        SideBar,
        DataTable
    }
}
</script>

<template>
    <div class="h-full w-full main text-white bg-gray-500">
        <SideBar />
        <div class="p-3">
            <!-- Put the body here -->
            <DataTable />
        </div>
    </div>
</template>

<style scoped>
.main {
    display: grid;
    grid-template-columns: 13rem auto;
}
</style>