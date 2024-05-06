<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Nav from "@/Components/Nav.vue";
import swal from "sweetalert";

const props = defineProps({
    posts: {
        type: Array,
        required: true,
    },
});

const handleDeletePost = (post) => {
    swal({
        title: "Êtes-vous sûr ?",
        text: "Une fois supprimé, vous ne pourrez plus récupérer cet article !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            axios
                .delete(route("posts.destroy", { id: post.id }))
                .then(() => {
                    const index = props.posts.findIndex(p => p.id === post.id);
                    if (index !== -1) {
                        props.posts.splice(index, 1);
                    }
                })
                .catch(() => {
                    swal("Une erreur est survenue lors de la suppression de l'article !", {
                        icon: "error",
                    });
                });
        }
    });
};

</script>


<template>
    <div class="flex flex-col justify-center items-center gap-5 w-full ">
        <Head>
            <title>Modification d'articles</title>
        </Head>
        <Nav />
        <div class="flex flex-col items-center w-full px-2 lg:w-3/4 gap-5">
            <h1 class="text-3xl">Liste de vos articles de blog !</h1>
            <Link :href="route('posts.create.view')" class="bg-[#28a745] px-6 py-4 rounded-lg">Ajouter un article</Link>
            <div class="flex flex-col gap-5 bg-[var(--secondary)] rounded-b-3xl py-5">
                <div v-for="post in posts" :key="post.id" class="relative flex flex-row gap-5 shadow-lg rounded-lg p-5 bg-[var(--secondary)] items-center justify-between">
                    <h2 class="text-xl font-bold">{{ post.title }}</h2>
                    <div class="flex flex-col">
                        <Link :href="route('posts.modify.view', { id: post.id })">Modifier</Link>
                        <button @click="handleDeletePost(post)">Supprimer</button>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</template>
