<script setup>
    import { useFlash } from '@/composables/useFlash.js';

    let { flash } = useFlash();
</script>

<template>
    <main>
        <p>
            <input type="text" v-model="food" @input="write"></input>
            <button @click="flash('it works!')">Click me</button>
        </p>
    </main>
</template>