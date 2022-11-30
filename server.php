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
var_dump($taskList);
var_dump($getTask);
// header('Content')
// $to_do = file_get_contents('package.json');
// $to_do_array = json_decode($to_do);s
