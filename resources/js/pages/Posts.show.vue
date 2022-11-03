<template>
    <div v-if="post">
        <section>
            <img v-if="post.cover" :src="`/image/${post.cover}`" alt="" class="h-full w-full object-fit object-center">
            
        </section>
        <div class="py-10">
            <div class="container">
                <h1>{{ post.title }}</h1>
                <h4>{{ post.category.name }}</h4>
                <Tags :tags="post.tags"/>
            </div>
        </div>
    </div>
</template>

<script>
import Tags from '../components/Tag.vue'

export default {
    components: {
        Tags,
    },
    props: ['slug'],
    data() {
        return {
            post: null,
            uniqueSlug: null,
        }
    },
    methods: {
        fetchPost() {
            // const slug = this.$route.params.slug
            // console.log(this.slug)
            axios.get(`/api/posts/${this.slug}`).then(res => {
                // console.log(res.data)
                // console.log('chiamata')
                const { post } = res.data
                console.log(post)
                this.post = post
                // console.log(post.title,post.cover)
            }).catch(err => {
                console.log(err.response)
                const { status } = err.response
                if (status === 404) {
                    this.$router.push({ name: '404' })
                }
            })
        }
    },
    beforeMount() {
        // console.log(this.$route)
        // console.log('route')
        this.fetchPost()
        return this.uniqueSlug = this.$route.params.slug
    }
}
</script>

<style lang="scss" scoped>

</style>