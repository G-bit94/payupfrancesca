<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_POST = json_decode(file_get_contents('php://input'), true);

    if (isset($_POST['content'])) {

        $content = $_POST['content'];

        if (file_put_contents('page.php', $content)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to write file.']);
        }
    }

}