<?php

// $to_do = [
//     'HTML',
//     'CSS',
//     'Responsive design',
//     'Javascript',
//     'PHP',
//     'Laravel'
// ];

$getTask = file_get_contents('package.json');
$taskList = json_decode($getTask);
// var_dump($taskList);
// var_dump($getTask);

// $to_do = file_get_contents('package.json');
// $to_do_array = json_decode($to_do);

header('Content-Type: application/json');
echo json_encode($taskList);
