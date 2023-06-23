<?php

header("Access-Control-Allow-Origin: http://localhost:5173/");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-type: application/json');

$tasks = [
    'HTML', 'responsive design', 'css', 'Javascript', 'PHP', 'Laravel'
];

echo json_encode($tasks);