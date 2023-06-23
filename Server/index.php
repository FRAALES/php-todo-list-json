<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-type: application/json');

$taskStr = file_get_contents('data.json');
$tasks = json_decode($taskStr);

echo json_encode($tasks);
echo ($taskStr);