<!-- <script>
export default {
    props: {
        comics: {
            type: Array,
            required: true
        }
    }
}
</script>


<template>
    <div>
        <h1>Ciao dal Componente Esempio!</h1>
        <p>Ecco i fumetti:</p>
        <ul>i
           
            <li v-for="comic in comics" :key="comic.title">
                <strong>{{ comic.title }}</strong><br>
                <em>{{ comic.series }}</em><br>
                <span>{{ comic.price }}</span><br>
                <p>{{ comic.description }}</p>
                <hr>
            </li>
        </ul>
    </div>
</template>


<style scoped>

</style>
 -->
