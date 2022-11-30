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


// $taskList[] = $_POST['new_task'];
// $json_pack = json_encode($taskList);
// file_put_contents('package.json', $todo_string);


// $to_do = file_get_contents('package.json');
// $to_do_array = json_decode($to_do);

header('Content-Type: application/json');
echo json_encode($taskList);
