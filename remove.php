<?php

$index = intval($_POST['id']) ?? null;
// var_dump($index);


$string = file_get_contents('todos.json');
$todos = json_decode($string, true);

$response = [
    'success' => true
];

array_splice($todos, $index, 1);
// var_dump($todos);

$response['results'] = $todos;

$string = json_encode($todos);
file_put_contents('todos.json', $string);

header('Content-Type: application/json');
echo json_encode($response);
