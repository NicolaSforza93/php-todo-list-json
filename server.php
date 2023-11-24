<?php


$todos = [
    [
        'text' => 'Fare i compiti',
        'done' => false
    ],
    [
        'text' => 'Fare la spesa',
        'done' => true
    ],
    [
        'text' => 'Fare il bucato',
        'done' => false
    ]
];

// Sto specificando che le informazioni restituite sono di tipo json
header('Content-Type: application/json');

echo json_encode($todos);
