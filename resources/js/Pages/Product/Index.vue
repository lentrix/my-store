<script setup>
import { Link } from '@inertiajs/vue3';

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

<h1>Products</h1>
<hr>
<div class="main">
    <div class="sidebar">
        <h2>Categories</h2>
        <ul>
            <li v-for="category in categories" :key="category.id" class="sidebar-link">
                <Link :href="'/products/' + category.id">
                    {{ category.name }}
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
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Category</th>
                    <th class="right">Wholesale Price</th>
                    <th class="right">Retail Price</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.name }}</td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.category_id }}</td>
                    <td class="right">{{ product.whole_sale_price }}</td>
                    <td class="right">{{ product.retail_price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

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

table {
    width:100%;
}

thead>tr {
    background-color: green;
    color: white!important;
}

th, td {
    border: 1px solid #888;
    padding: 2px;
}

.right {
    text-align: right;
}

h2 {
    font-size: 18pt!important;
}

h1 {
    font-size: 24pt!important;
}
</style>
