<?php

// Recupero il parametro dall'input
$todo_text = $_POST['postParam'] ?? '';

// var_dump($todo_text);

$response = [
    'success' => true
];

if ($todo_text) {
    $string = file_get_contents('todos.json');
    $todos = json_decode($string, true);

    $new_todo = [
        'text' => $todo_text,
        'done' => false
    ];

    $todos[] = $new_todo;

    $response['results'] = $todos;

    // Trasformo la stringa in json
    $string = json_encode($todos);

    // var_dump($todos);

    // La salvo nel file
    file_put_contents('todos.json', $string);
} else {
    $response['success'] = false;
    $response['message'] = 'Todo params is required';
};

// Restituire in formato json
header('Content-Type: application/json');
echo json_encode($response);
