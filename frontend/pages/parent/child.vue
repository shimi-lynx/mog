<script setup lang="ts">
type Props = {
  foobar: number
}
const props = defineProps<Props>()
</script>

<template>
  <div>
    {{ foobar }}
  </div>
</template>