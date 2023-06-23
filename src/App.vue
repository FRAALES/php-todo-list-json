<script>
import axios from "axios";

export default {
  data() {
    return {
      tasks: []
    };
  },
  mounted() {
    axios.get('http://localhost:5173/Server/index.php')
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
    <div class="aggiungi-task">
      <input type="text" name="name" placeholder="Inserisci Task" />
      <button>Aggiungi</button>
    </div>

    <div class="task-container">
      <ul>
        <li v-for="(task, index) in tasks" :key="index">
          {{ tasks.task }}
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
  background-color: red;
  height: 300px;
  width: 100%;
}
</style>
