<template>
    <div>
        <Header />

        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import Header from '../components/Header'

export default{
    name: 'App',
    components: {
        Header,
    }
}
</script>

<style lang="scss">
    div{
        h1{
            text-transform: uppercase;
        }
    }
</style>