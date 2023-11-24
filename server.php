<?php
// Per poter leggere il contenuto del file json, che ci restituisce una stringa
$string = file_get_contents('todos.json');
// Trasformo la stringa in variabile Php
$todos = json_decode($string, true);

// Sto specificando che le informazioni restituite sono di tipo json
header('Content-Type: application/json');

echo json_encode($todos);
