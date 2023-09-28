<?php
    include 'config.php';

    if (isset($_POST['message'])) {
        $message = $_POST['message'];
        $stmt = $pdo->prepare("INSERT INTO messages (message) VALUES (:message)");
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    }

    header("Location: index.php");
?>
