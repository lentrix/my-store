<script setup>

import { ref } from 'vue';

defineProps({
    categories: {
        type: Array,
        required: true
    }
});


</script>

<template>
<h1>Categories</h1>
<ul>
    <li v-for="category in categories" :key="category.id">
        {{ category.name }} <br>
        {{ category.description }}
    </li>
</ul>

</template>
