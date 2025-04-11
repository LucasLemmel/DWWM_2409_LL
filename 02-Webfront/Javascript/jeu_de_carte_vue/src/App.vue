<template>
    <h1>Jeu de cartes</h1>
    <TableComponent :entetes="entetes" :data="dataCartes" />
    <p>
        Carte la plus jouée: <b>{{ carteLaPlusJouee.name }}</b> avec
        <b>{{ carteLaPlusJouee.victory }}</b> victoires
    </p>
    <p>
        Carte ayant le meilleur ratio victoires/défaites: <b>{{ carteMeilleurRatio.name }}</b> avec 
        <b>{{ carteMeilleurRatio.played }}</b> paties jouées dont <b>{{ carteMeilleurRatio.victory }}</b> victoires
    </p>
</template>

<script setup>
import { computed, onMounted, ref } from 'vue'
import TableComponent from './components/TableComponent.vue'

const entetes = [
    'id',
    'name',
    'level',
    'description',
    'power',
    'attack',
    'armor',
    'damage',
    'mitigation',
    'played',
    'victory',
    'defeat',
    'draw',
]

const dataCartes = ref([])

const carteLaPlusJouee = computed(() => {
    return dataCartes.value.length
        ? dataCartes.value.reduce((a, b) => (b.played > a.played ? b : a))
        : ''
})

const carteMeilleurRatio = computed(() => {
    return dataCartes.value.length
        ? dataCartes.value.reduce(
              (a, b) => a.victory / (a.played - a.draw) > b.victory / (b.played - b.draw) ? a : b,
          )
        : ''
})

console.log(carteLaPlusJouee.value)

onMounted(async () => {
    const reponse = await fetch(
        'https://arfp.github.io/tp/web/javascript/03-cardgame/cardgame.json',
    )
    dataCartes.value = await reponse.json()
})
</script>

<style scoped>
h1 {
    text-align: center;
}
</style>
