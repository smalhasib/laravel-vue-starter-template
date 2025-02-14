import axios from 'axios'

const api = axios.create({
  baseURL: 'http://localhost:8000/api/v1',
  headers: {
    'Content-Type': 'application/json',
    Accept: 'application/json'
  }
})

export const pingApi = async () => {
  const response = await api.get('/ping')
  return response.data
}

export default api
