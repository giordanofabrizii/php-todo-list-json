<?php 

echo $_POST['delete'];

if(isset($_POST['delete'])) {

    // # prendo i dati dal json
    $rawtodo = file_get_contents('./db/todo.json');
    
    // < traduco in un array associativo per cambiare i file
    $todo = json_decode($rawtodo, true);
    
    unset($todo[$_POST['delete']]);

    $data = json_encode($todo);

    file_put_contents('./db/todo.json', $data);

}

header('location: ./index.php');

?>