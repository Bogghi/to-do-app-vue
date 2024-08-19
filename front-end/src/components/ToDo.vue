<template>
  <div class="to-do">
    <input type="checkbox" :checked="task.checked" :id="task.id" />
    <label :for="task.id">{{ task.task }}</label>
  </div>
</template>

<script>
export default {
  name: "ToDo",
  props: {
    task: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style scoped>
.to-do {
  background-color: rgba(0, 103, 43, 0.37);
  width: 30vw;
  display: flex;
  flex-direction: row;
  border-radius: 10px;
}
</style>
