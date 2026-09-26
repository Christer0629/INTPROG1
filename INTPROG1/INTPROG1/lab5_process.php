<?php

header("Content-Type: application/json");

$input = file_get_contents("php://input");

$data = json_decode($input, true);

$name = $data["name"];

$response = [
    "status" => "success",
    "message" => "Welcome, " . $name . "!"
];

echo json_encode($response);

?>