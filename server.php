<?php 

header('Content-type: application/json');

// # prendo i dati dal json
$rawtodo = file_get_content('./db/todo.json');

// < traduco in un array associativo per cambiare i file
$todo = json_decode($rawtodo, true);

echo json_encode($todo);

?>