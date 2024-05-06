<script setup>
import { Link } from "@inertiajs/vue3";
import ApplicationLogo from './ApplicationLogo.vue';
</script>

<template>
    <nav class="flex h-[120px] justify-center w-full shadow-lg">
        <div class="flex justify-between items-center px-2 lg:w-3/4">
            <Link :href="route('posts.index')"><ApplicationLogo class="h-[80px]"/></Link>
            <Link :href="route('posts.show')">Gestion des articles</Link>
        </div>
    </nav>
</template>