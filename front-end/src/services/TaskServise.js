import axios from "axios";

const apiClient = axios.create({
  baseURL: "http://localhost:8888",
  withCredentials: false,
  headers: {
    accept: "application/json",
    "Content-Type": "application/json",
  },
});

export default {
  getAllTasks() {
    return apiClient.get("/tasks");
  },
};
