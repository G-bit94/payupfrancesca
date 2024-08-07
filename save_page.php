<?php

header('Content-Type: application/json');

$status = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_POST = json_decode(file_get_contents('php://input'), true);

    try {
        $content = $_POST['content'];
        file_put_contents('page.php', $content);
    } catch (Exception $e) {
        $status["error"] = $e->getMessage();
    }

    echo json_encode($status);
}