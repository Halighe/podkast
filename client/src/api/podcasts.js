import axios from 'axios';

const API_BASE_URL = 'http://127.0.0.1:8000/api';

export const podcastsApi = {
  // Получение списка подкастов
  getPodcasts() {
    return axios.get(`${API_BASE_URL}/podcasts`);
  },

  // Получение одного подкаста по ID
  getPodcast(id) {
    return axios.get(`${API_BASE_URL}/podcasts/${id}`);
  },
};
