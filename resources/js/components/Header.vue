<template>
  <header class="mb-5">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <li class="nav-item">
            <router-link :to="{name: 'home'}">Home</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'about'}">About</router-link>
        </li>
    </nav>
  </header>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style>

</style>