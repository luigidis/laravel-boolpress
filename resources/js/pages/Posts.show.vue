<template>
    <div>
        <div>
            <div class="container">
                <h1>Pagina di dettaglio del post</h1>
                <p>
                    Slug: {{ uniqueSlug }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                post: null,
                uniqueSlug: null,
            }
        },
        methods: {
            fetchPost() {
                const slug = this.$route.params.slug
                axios.get(`/api/posts/${slug}`).then( res => {
                    // console.log(res.data)
                    // console.log('chiamata')
                })
            }
        },
        beforeMount() {
            // console.log(this.$route)
            // console.log('route')
            return this.uniqueSlug = this.$route.params.slug 
        }
    }
</script>

<style lang="scss" scoped>

</style>