<template>
    <div>
        <header>
            <div class="container">
                <div class="flex justify-between items-center">
                    <div>
                        LOGO
                    </div>
                    <ul class="flex items-center">
                        <li class="px-2 py-1"
                            v-for="(link,i) in navLinks" :key="i">
                            <router-link :to="link.path"> {{ link.text }}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
export default {
    data() {
        return {
            navLinks: [
                {
                    text: 'Home',
                    path: '/',
                },
                {
                    text: 'Blog',
                    path: '/blog',
                },
                {
                    text: 'Chi Siamo',
                    path: '/chi-siamo',
                },
                {
                    text: 'Contattaci',
                    path: '/contatti',
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped>

</style>