<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <div id="app">
        <section>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="input-group">

                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="(todo, index) in todos" :key="index">
                            {{ todo.text }}
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>



    <script src="./js/main.js"></script>
</body>

</html>