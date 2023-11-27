<?php

$index = intval($_POST['id']) ?? null;

$string = file_get_contents('todos.json');
$todos = json_decode($string, true);

$response = [
    'success' => true
];

if ($todos[$index]['done'] == true) {
    $todos[$index]['done'] = false;
} else {
    $todos[$index]['done'] = true;
}

$response['results'] = $todos;

$string = json_encode($todos);
file_put_contents('todos.json', $string);

header('Content-Type: application/json');
echo json_encode($response);
