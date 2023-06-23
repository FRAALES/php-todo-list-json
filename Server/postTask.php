<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-type: application/json');

$data = $_POST;
$encData = json_encode($data);

file_put_contents('test.json', $encData);