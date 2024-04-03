<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <div class="px-8 bg-teal-900 text-white flex items-center">
        <div class="branding text-xl font-bold flex-1">Inertia Midterm</div>
        <nav id="main-nav" class="flex">
            <Link class="hover:bg-teal-700 py-4 px-8" href="/">Home</Link>
            <Link class="hover:bg-teal-700 py-4 px-8" href="/merchandises">Merchandises</Link>
            <Link class="hover:bg-teal-700 py-4 px-8" href="/about">About</Link>
        </nav>
    </div>
</template>

