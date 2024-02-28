<template>
  <div>
    <h1>Welcome to the pages/index.vue</h1>
    <AppAlert>
      This is an auto-imported component
    </AppAlert>
    <li><NuxtLink to="/about">/about</NuxtLink></li>
    <li><NuxtLink to="/hello/world">/slug</NuxtLink></li>
    <li><NuxtLink to="/parent">/parent</NuxtLink></li>
  </div>
</template>