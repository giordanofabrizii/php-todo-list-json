<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>

    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main id="app">
        <h1>TODO LIST</h1>
        <section id="todo-container">
            <ul>
                <li v-for="(event,index) in todo" 
                    @click="event.completed = !event.completed" 
                    :class="(event.completed == true) ? 'completed' : ''">
                        {{ event.event }}
                </li>
            </ul>
        </section>
        <section id="form-container">
            <form action="./addiction.php" method="POST">
                <input type="text" name="text" id="text" placeholder="Inserisci una nuova task">
                <button type="submit">Invia</button>
            </form>
        </section>
    </main>    

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>