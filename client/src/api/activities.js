import axios from 'axios';

const API_BASE_URL = 'http://127.0.0.1:8000/api';

export const activitiesApi = {
  // Получение всех активностей
  getActivities() {
    return axios.get(`${API_BASE_URL}/activities`);
  },

  // Получение активности по типу
  getActivitiesByType(type) {
    return axios.get(`${API_BASE_URL}/activities?type=${type}`);
  },

  // Получение одной активности по ID
  getActivity(id) {
    return axios.get(`${API_BASE_URL}/activities/${id}`);
  },
};
