<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/40396ce4f1.js" crossorigin="anonymous"></script>;
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <div id="app">
        <section>
            <div class="container p-3">
                <h1 class="fw-bold text-center text-white">TODO LIST</h1>
                <div class="card">
                    <div class="card-header bg-primary-subtle">
                        <div class="input-group">
                            <input type="text" class="form-control border-secondary-subtle" placeholder="Inserisci tasks" aria-describedby="button-addon2" v-model="newTodo" @keyup.enter="addStoreTodo">
                            <button class="btn btn-light border-secondary-subtle" type="button" id="button-addon2" @click="addStoreTodo">Aggiungi</button>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between" v-for="(todo, index) in todos" :key="index" :class="{done: todo.done}" @click="toggleTodo(index)">
                            <div class="d-flex gap-3">
                                <span class="check" v-if="todo.done === true">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                                <span v-else>
                                    <i class="fa-solid fa-xmark"></i>
                                </span>
                                {{ todo.text }}

                            </div>
                            <span class="remove" @click.stop="removeTodo(index)">
                                <i class="fa-solid fa-circle-minus"></i>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>



    <script src="./js/main.js"></script>
</body>

</html>