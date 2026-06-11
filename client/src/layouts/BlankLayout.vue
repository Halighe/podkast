<template>
  <div class="blank-layout">
    <router-view />
  </div>
</template>

<script setup lang="ts">
// Пустой лейаут без хедера и футера
</script>

<style scoped lang="scss">
.blank-layout {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
</style>
