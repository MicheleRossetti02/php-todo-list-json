<?php

$to_do = [
    'HTML',
    'CSS',
    'Responsive design',
    'Javascript',
    'PHP',
    'Laravel'
];

$to_do = file_get_contents('tasks.json');
$to_do_array = json_decode($to_do);


// header('Content-Type: application/json');
// echo json_encode($to_do_array);
