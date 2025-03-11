<script setup>

const props = defineProps({
    product: Object
})

</script>

<template>

    <div class="p-8 rounded border border-gray-200 shadow m-4 bg-blue-100">
        <div class="flex">
            <img
                src="https://karanzi.websites.co.in/obaju-turquoise/img/product-placeholder.png"
                alt=""
                class="w-[100px] h-[100%] object-fit"
            >
            <div class="p-4">
                <h3 class="text-xl">{{ product.name }}</h3>
            </div>
        </div>
    </div>

</template>
