<?php
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    echo "Dados inválidos";
    exit;
}

include 'DBcreate.php';
?>