<script setup>
import { Link } from '@inertiajs/vue3';
import ProductsTable from '../../Components/ProductsTable.vue';
import ProductCard from '../../Components/ProductCard.vue';
import MainLayout from '../../Layouts/MainLayout.vue';

defineProps({
    products: {
        type: Array,
        required: true
    },
    categories: {
        type: Array,
        required: true
    },
    category: {
        type: Object,
        required: false
    }
});

</script>

<template>
    <MainLayout>
        <h1>Products</h1>
        <hr>
        <div class="main">
            <div class="sidebar">
                <h2>Categories</h2>
                <ul>
                    <li class="sidebar-link" :class="category==null?'active':''">
                        <Link href="/products">All</Link>
                    </li>
                    <li v-for="cat in categories" :key="cat.id" class="sidebar-link" :class="cat.id==category?.id ? 'active': ''">
                        <Link :href="'/products/' + cat.id">
                            {{ cat.name }}
                        </Link>
                    </li>
                </ul>
            </div>
            <div class="products">
                <h2>
                    Products
                    <span v-if="category">
                        - {{ category.name }}
                    </span>
                </h2>
                <!-- <ProductsTable :products="products" /> -->

                <div class="grid grid-cols-1 gap-2 md:grid-cols-3">
                    <ProductCard :product="product" v-for="product in products" />
                </div>
            </div>
        </div>
    </MainLayout>

</template>

<style>


.main {
    display: flex;
    align-items: flex-start;
}

.sidebar {
    width: 300px;
    padding: 20px;
    border-right: 1px solid #ccc;
}

.products {
    flex: 1;
    padding: 20px;
}

.sidebar-link {
    padding-block: 8px;
    border-bottom: 1px solid #888;

}

.sidebar-link:hover {
    background-color: #dfdfdf;
}

li.active {
    background-color: rgb(162, 229, 225);
}

</style>
