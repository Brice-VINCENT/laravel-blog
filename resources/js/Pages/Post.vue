<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Nav from "@/Components/Nav.vue";
import { ref, computed } from 'vue';

const props = defineProps({
    posts: {
        type: Array,
        required: true,
    },
});

const searchTerm = ref('');
const selectedCategory = ref('all');

const filteredPosts = computed(() => {
    return props.posts.filter((post) => {
        const matchesSearchTerm = post.title.toLowerCase().includes(searchTerm.value.toLowerCase());
        const matchesCategory = selectedCategory.value === 'all' || post.category === selectedCategory.value;
        return matchesSearchTerm && matchesCategory;
    });
});

const handleSearchChange = (event) => {
    searchTerm.value = event.target.value;
}

const handleCategoryChange = (event) => {
    selectedCategory.value = event.target.value;
}

function stripHtml(html) {
    const tmp = document.createElement("DIV");
    tmp.innerHTML = html;
    return tmp.textContent || tmp.innerText || "";
}

function truncateText(text, length) {
    const strippedText = stripHtml(text);
    return strippedText.length > length ? strippedText.substr(0, length) + '...' : strippedText;
}
</script>


<template>
    <div class="flex flex-col justify-center items-center gap-5 w-full ">
        <Head>
            <title>Articles</title>
            <meta
                name="description"
                content="Articles de blog autour du numérique et de la tech"
            />
        </Head>
        <Nav />
        <div class="flex flex-col items-center w-full px-2 lg:w-3/4">
            <h1 class="text-3xl">Bienvenu sur le blog Laravel dédié au numérique !</h1>
            <div class="flex flex-col lg:flex-row justify-between w-full bg-[var(--primary)] rounded-t-3xl p-8 mt-5 gap-4">
                <input type="text" placeholder="Rechercher un article" class="p-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" @input="handleSearchChange($event)" />
                <select @change="handleCategoryChange" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="all">Toutes les catégories</option>
                    <option value="Développement web">Développement web</option>
                    <option value="High-tech">High-tech</option>
                    <option value="Réseaux sociaux">Réseaux sociaux</option>
                    <option value="Marketing numérique">Marketing numérique</option>
                    <option value="Outils numériques">Outils numériques</option>
                    <option value="E-commerce">E-commerce</option>
                </select>

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 bg-[var(--secondary)] rounded-b-3xl py-5">
                <div v-for="post in filteredPosts" :key="post.id" class="relative flex flex-col gap-5 shadow-lg rounded-lg p-5 bg-[var(--secondary)]">
                    <div class="absolute top-10 right-10 bg-[var(--primary)] text-white px-3 py-2 rounded-full">
                        {{ post.category }}
                    </div>
                    <img :src="post.image" class="rounded-lg "/>
                    <h2 class="text-xl font-bold">{{ post.title }}</h2>
                    <p v-html="truncateText(post.content, 150)"></p>
                    <Link :href="route('posts.show.id', { id: post.id })">Lirez la suite</Link>
                </div>
            </div>
            
        </div>
    </div>
</template>
