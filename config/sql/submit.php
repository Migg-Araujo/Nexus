<?php
$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    http_response_code(400);
    echo "Dados inválidos";
    exit;
}

$host = "localhost";
$dbname = "nexus";
$user = "root";
$pass = "";

// Conexão ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO QUESTIONS (QUESTION, ANSWER) VALUES (:question, :answer)");

    foreach ($data as $entry) {
        $stmt->execute([
            ':question' => $entry['question'],
            ':answer' => $entry['answer'],
        ]);
    }

    echo "Respostas salvas com sucesso!";
} catch (PDOException $e) {
    http_response_code(500);
    echo "Erro ao salvar: " . $e->getMessage();
}
?>