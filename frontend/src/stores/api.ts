import { defineStore } from 'pinia'
import { ref } from 'vue'
import { pingApi } from '@/services/api'

export const useApiStore = defineStore('api', () => {
  const pingMessage = ref('')
  const error = ref('')

  const ping = async () => {
    try {
      const data = await pingApi()
      pingMessage.value = `Backend says: ${data.message} at ${data.timestamp}`
      error.value = ''
    } catch (e) {
      error.value = 'Failed to connect to backend'
      console.error(e)
    }
  }

  return {
    pingMessage,
    error,
    ping
  }
})
