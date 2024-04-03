<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    description: '',
    category_id: 0,
    sku: '',
    bar_code: '',
    wholesale_price: 0,
    retail_price: 0
})

const props = defineProps({
    categories: Array
})

const submit = () => {
    form.post('/merchandises')
}

</script>

<template>
    <div>
        <h3 class="text-2xl">Entry Form</h3>
        <hr>
        <form @submit.prevent="submit">
            <div class="flex flex-col my-3">
                <label for="name">Product Name</label>
                <input type="text" id="name" v-model="form.name" class="w-full rounded">
            </div>
            <div class="flex flex-col my-3">
                <label for="description">Description</label>
                <textarea rows="4" id="description" class="w-full rounded"></textarea>
            </div>
            <div class="flex flex-col my-3">
                <label for="category_id">Category</label>
                <select id="category_id" v-model="form.description" class="w-full rounded">
                    <option value="0">Select category</option>
                    <option v-for="(categ, index) in categories" :key="categ.id" :value="categ.id">
                        {{ categ.name }}
                    </option>
                </select>
            </div>
            <div class="flex flex-col my-3">
                <label for="sku">SKU</label>
                <input type="text" id="sku" v-model="form.sku" class="w-full rounded">
            </div>
            <div class="flex flex-col my-3">
                <label for="barcode">Bar Code</label>
                <input type="text" id="barcode" v-model="form.bar_code" class="w-full rounded">
            </div>
            <div class="flex flex-col my-3">
                <label for="wholesale_price">Wholesale Price</label>
                <input type="number" step="0.05" id="wholesale_price" v-model="form.wholesale_price" class="w-full rounded">
            </div>
            <div class="flex flex-col my-3">
                <label for="retail_price">Retail Price</label>
                <input type="number" step="0.05" id="retail_price" v-model="form.retail_price" class="w-full rounded">
            </div>
            <button class="my-3 bg-teal-500 text-white px-8 py-4">Save Changes</button>
        </form>
    </div>
</template>
