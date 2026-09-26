<?php

header("Content-Type: text/plain");

$json = file_get_contents("php://input");

$data = json_decode($json, true);

if ($data === null) {
    echo "No JSON data received.";
    exit;
}

echo "Username: " . $data["username"] . "\n";
echo "Password: " . $data["password"];

?>