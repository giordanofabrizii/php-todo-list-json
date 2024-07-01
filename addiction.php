<?php 

if(isset($_POST['text'])) {

    // # prendo i dati dal json
    $rawtodo = file_get_contents('./db/todo.json');
    
    // < traduco in un array associativo per cambiare i file
    $todo = json_decode($rawtodo, true);
    
    $todo[] = [
        "event" => $_POST['text'],
        "completed" => false
    ];

    $data = json_encode($todo);

    file_put_contents('./db/todo.json', $data);

}
header('location: ./index.php');

?>