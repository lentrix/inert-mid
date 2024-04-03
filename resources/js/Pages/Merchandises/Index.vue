<script setup>
import { Head } from '@inertiajs/vue3';
import EntryForm from '@/Components/EntryForm.vue'
import Header from '@/Components/Header.vue'

const props = defineProps({
    categories: Array,
    merchandises: Array
})

</script>

<template>
    <Head title="Merchandises" />
    <Header />
    <div v-if="$page.errors">
        Errors found in entry.
    </div>
    <div class="flex gap-12 px-4 py-8">
        <div class="w-[400px] p-8 bg-gray-100 rounded-lg shadow-md">
            <EntryForm :categories="categories" />
        </div>
        <div class="flex-1 bg-teal-100 rounded-lg shadow-mid p-8">
            <h1 class="text-2xl">Merchandises</h1>
            <hr>
            <table class="w-full">
                <thead>
                    <tr class="bg-teal-600 text-white">
                        <th class="py-2">Product Name</th>
                        <th>Wholesale Price</th>
                        <th>Retail Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="even:bg-gray-100 border border-b-gray-300" v-for="(merch, index) in props.merchandises" :key="merch.id">
                        <td class="py-2">{{ merch.name }}</td>
                        <td class="py-2 text-right">{{ merch.wholesale_price }}</td>
                        <td class="py-2 text-right">{{ merch.retail_price }}</td>
                        <td class="text-center">...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
