<template>
    <div class="h-screen flex items-center">
        <div class="container">
            <h1 class="text-[64px]">404</h1>
            <p>Ops la pagina che cercavi non esiste</p>
            <p><router-link :to="{ name: 'home' }">Torna alla Home</router-link></p>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>