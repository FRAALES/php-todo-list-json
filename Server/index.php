<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-type: application/json');

$tasks = [
    ['task' => 'HTML'],
    ['task' => 'responsive design'],
    ['task' => 'css'],
    ['task' => 'Javascript'],
    ['task' =>  'Laravel'],
];

echo json_encode($tasks);