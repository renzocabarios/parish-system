<script setup>
</script>

<template>
    <div class="h-full w-full flex justify-center items-center text-white">
        <div class="p-10 bg-sky-800 flex flex-col gap-5 rounded">
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="text-black p-2 rounded" type="email" name="email">
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input class="text-black p-2 rounded" type="password" name="password">
            </div>
            <button class="px-5 py-2 bg-sky-900">Login</button>
        </div>
    </div>
</template>