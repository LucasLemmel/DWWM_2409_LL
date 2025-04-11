<template>
    <h1>Exemple</h1>
    <div id="compteur">{{ compteur }}</div>
    <div id="btn-grp">
        <button @click="augmenterCompteur" id="augmenter">Augmenter</button>
        <button @click="diminuerCompteur" id="diminuer">Diminuer</button>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const compteur = ref(0)

const augmenterCompteur = () => {
    compteur.value++
}

const diminuerCompteur = () => {
    compteur.value--
}
</script>

<style scoped>
h1 {
    text-align: center;
}
#compteur {
    text-align: center;
    font-size: 3rem;
}
#btn-grp {
    text-align: center;
}
</style>
