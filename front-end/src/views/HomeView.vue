<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png" />
    <h1>Task</h1>
    <div class="to-do-container">
      <ToDo v-for="task in tasks" :key="task.id" :task="task" />
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import TaskServise from "@/services/TaskServise";
import ToDo from "@/components/ToDo.vue";

export default {
  name: "HomeView",
  components: {
    ToDo,
  },
  data() {
    return {
      tasks: null,
    };
  },
  created() {
    TaskServise.getAllTasks().then((res) => {
      this.tasks = res.data;
      console.log(res.data);
    });
  },
};
</script>

<style scoped>
.to-do-container {
  display: flex;
  justify-content: center;
}
</style>
