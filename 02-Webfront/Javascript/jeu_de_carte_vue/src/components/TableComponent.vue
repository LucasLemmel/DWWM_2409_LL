<template>
    <table>
        <thead>
            <tr>
                <th v-for="(key, i) in entetes" :key="i">{{ key }}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(carte, id) in data" :key="id">
                <td>{{ carte.id }}</td>
                <td>{{ carte.name }}</td>
                <td>{{ carte.level }}</td>
                <td>{{ carte.description }}</td>
                <td>{{ carte.power }}</td>
                <td>{{ carte.attack }}</td>
                <td>{{ carte.armor }}</td>
                <td>{{ carte.damage }}</td>
                <td>{{ carte.mitigation }}</td>
                <td>{{ carte.played }}</td>
                <td>{{ carte.victory }}</td>
                <td>{{ carte.defeat }}</td>
                <td>{{ carte.draw }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script setup>
defineProps({
    entetes: Array,
    data: Array,
})
</script>

<style scoped>
table {
    border: 2px solid black;
    border-collapse: collapse;
}
thead {
    background: #ddd;
}
th {
    border: 1px solid #333;
    border-bottom: none;
}
tbody tr {
    border: 1px solid #ccc;
}
tbody tr:nth-child(even) {
    background: #eee;
}
th,
td {
    padding: 0.3rem 0.8rem;
    text-wrap: nowrap;
}
</style>
