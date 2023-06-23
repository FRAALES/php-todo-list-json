<script>
import axios from "axios";

export default {
  data() {
    return {
      tasks: [],

      newTask: {
        todo: ""
      }
    };
  },
  methods: {
    onSubmit() {

      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };

      axios.post('http://localhost:8888/php-todo-list-json/Server/postTask.php', this.newTask, headers)
        .then(response => console.log("response", response))
        .catch(error => console.error("error", error));
    }
  },
  mounted() {
    axios.get('http://localhost:8888/php-todo-list-json/Server/index.php')
      .then(response => {
        this.tasks = response.data;
      })
  }
};
</script>

<template>
  <div class="container">
    <header>
      <h1>To Do List</h1>
    </header>
    <form @submit.prevent="onSubmit" class="aggiungi-task">
      <input type="text" name="todo" id="todo" placeholder="Inserisci Task" v-model="newTask.todo" />
      <button>Aggiungi task</button>
    </form>

    <div class="task-container">
      <ul>
        <li v-for="(task, index) in tasks" :key="index">
          {{ tasks.todo }}
        </li>

      </ul>
    </div>
  </div>
</template>

<style scoped>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.container {
  width: 500px;
}

header {
  margin-bottom: 50px;
}

.aggiungi-task {
  width: 100%;
  display: flex;
  justify-content: space-around;
  background-color: aquamarine;
  margin-bottom: 50px;
}

.task-container {
  height: 300px;
  width: 100%;
}
</style>
