<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Nav from "@/Components/Nav.vue";
import axios from "axios";
import swal from "sweetalert";

const props = defineProps({
    post: {
        type: Object,
        required: true,
    },
});

const handleModify = (title, content, category, image) => {
    axios
        .put(route("posts.update", { id: props.post.id }), {
            title: title,
            content: content,
            category: category,
            image: image,
        })
        .then(() => {
            swal("L'article a été modifié avec succès !", {
                icon: "success",
            });
        })
        .catch(() => {
            swal("Une erreur est survenue lors de la modification de l'article !", {
                icon: "error",
            });
        });
};
</script>

<template>
    <div class="flex flex-col justify-center items-center gap-5 w-full ">
        <Head>
            <title>Modification de l'article {{ post.title }}</title>
        </Head>
        <Nav />
        <div class="flex flex-col items-center w-full px-2 lg:w-3/4 gap-5">
            <input type="text" v-model="post.title" class="w-full" />
            <textarea v-model="post.content" class="w-full h-[200px]" style="white-space: pre-wrap;"></textarea>
            <input type="text" v-model="post.category" class="w-full" />
            <input type="text" v-model="post.image" class="w-full" />
            <button class="bg-[#28a745] px-6 py-4 rounded-lg" @click="handleModify(post.title, post.content, post.category, post.image)">Modifier</button>          
        </div>
    </div>
</template>