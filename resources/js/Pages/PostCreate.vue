<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Nav from "@/Components/Nav.vue";
import { ref } from 'vue';
import axios from "axios";
import swal from "sweetalert";

const title = ref('');
const content = ref('');
const category = ref('');
const image = ref('');

const handleCreate = () => {
    axios
        .post(route("posts.create"), {
            title: title.value,
            content: content.value,
            category: category.value,
            image: image.value,
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
            <title>Création d'un article de blog !</title>
        </Head>
        <Nav />
        <div class="flex flex-col items-center w-full px-2 lg:w-3/4 gap-5">
            <input v-model="title" type="text" class="w-full" id="title" placeholder="Titre de l'article"/>
            <textarea v-model="content" class="w-full h-[200px]" style="white-space: pre-wrap;" id="content" placeholder="Contenu de l'article"></textarea>
            <input v-model="category" type="text" class="w-full" id="category" placeholder="Catégory de l'article"/>
            <input v-model="image" type="text" class="w-full" id="image" placeholder="image mise en avant" />
            <button class="bg-[#28a745] px-6 py-4 rounded-lg" @click="handleCreate">Créer</button>          
        </div>
    </div>
</template>