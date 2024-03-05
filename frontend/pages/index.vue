<script setup lang="ts">
import { onMounted } from 'vue';

const helloWorld = ref('')
const getHelloWorld = async () => {
  helloWorld.value = await $fetch('http://localhost/api/hello')
}
onMounted(getHelloWorld)
</script>
<template>
  <div>
    <h1>Welcome to the pages/index.vue</h1>
    <AppAlert>
      This is an auto-imported component
    </AppAlert>
    <li><NuxtLink to="/about">/about</NuxtLink></li>
    <li><NuxtLink to="/hello/world">/slug</NuxtLink></li>
    <li><NuxtLink to="/parent">/parent</NuxtLink></li>
    <button @click="getHelloWorld">get!</button>
    <template v-if="helloWorld?.message">
      <p>{{ helloWorld.message }}</p>    
    </template>
  </div>
</template>