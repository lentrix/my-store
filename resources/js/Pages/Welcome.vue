<script setup>
import {ref} from 'vue'
import MainLayout from '../Layouts/MainLayout.vue';

const message = ref("This is an Inertia App.")

</script>

<template>
    <MainLayout>
        <h1>Hello World!</h1>
        <div>{{ message }}</div>
    </MainLayout>

</template>
