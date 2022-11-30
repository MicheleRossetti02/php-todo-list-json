<?php

// $to_do = [
//     'HTML',
//     'CSS',
//     'Responsive design',
//     'Javascript',
//     'PHP',
//     'Laravel'
// ];

$to_do = file_get_contents('package.json');
$to_do_array = json_decode($to_do);
