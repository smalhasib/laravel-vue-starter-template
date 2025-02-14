<script setup lang="ts">
import { onMounted } from 'vue'
import { useApiStore } from '@/stores/api'

const apiStore = useApiStore()

onMounted(async () => {
  await apiStore.ping()
})
</script>

<template>
  <div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-4">Welcome</h2>
    <div class="space-y-4">
      <p class="text-gray-600">
        Template using Laravel + Vue + MySQL + PhpMyAdmin
      </p>
      <div class="bg-gray-50 p-4 rounded">
        <h3 class="font-semibold mb-2">API Status:</h3>
        <p v-if="apiStore.error" class="text-red-500">
          {{ apiStore.error }}
        </p>
        <p v-else-if="apiStore.pingMessage" class="text-green-600">
          {{ apiStore.pingMessage }}
        </p>
        <p v-else class="text-gray-500">Checking connection...</p>
      </div>
    </div>
  </div>
</template>
