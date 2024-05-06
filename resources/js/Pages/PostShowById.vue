<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Nav from "@/Components/Nav.vue";

const props = defineProps({
    post: {
        type: Array,
        required: true,
    },
});
</script>


<template>
    <div class="flex flex-col justify-center items-center gap-5 w-full ">
        <Head>
            <title>Articles</title>
            <meta
                name="description"
                content={{ post.title }}
            />
        </Head>
        <Nav />
        <div class="flex flex-col items-center w-full px-2 lg:w-3/4 gap-5">
            <h1 class="text-3xl">{{ post.title }}</h1>
            <div class="flex flex-col lg:flex-row items-center justify-between w-full gap-4">
                <img :src="post.image" class="w-full lg:w-2/4 object-cover rounded-lg" />
                <div class="w-full lg:w-2/4" v-html="post.content.replace(/\n/g, '<br>')"></div>
            </div>
            
        </div>
    </div>
</template>
