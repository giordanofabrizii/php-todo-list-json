<?php 

$todo = [
    [
        "event" => "Pulire",
        "completed" => false,
    ],
    [
        "event" => "Spazzare",
        "completed" => false,
    ],
    [
        "event" => "Cucinare",
        "completed" => false,
    ],
    [
        "event" => "Lavare",
        "completed" => false,
    ],
    [
        "event" => "Sistemare",
        "completed" => false,
    ],
];

header('Content-type: application/json');

echo json_encode($todo);

?>