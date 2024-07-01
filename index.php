<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <main id="app">
        <h1 v-for="event in todo">
            {{ event.event }}
        </h1>

        <form action="./addiction.php" method="POST">
            <input type="text" name="text" id="text">
            <button type="submit">Invia</button>
        </form>
    </main>    

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>