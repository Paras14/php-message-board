<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Board</title>
</head>
<body>
    <h1>Welcome to the Message Board!</h1>
    <p>Add a new message:</p>
    <form action="addMessage.php" method="post">
        <label for="message">Message:</label>
        <input type="text" id="message" name="message" required>
        <input type="submit" value="Add Message">
    </form>
    <p>Messages:</p>
    <?php
        include 'config.php';
        $sql = "SELECT * FROM messages";
        foreach ($pdo->query($sql) as $row) {
            echo "<p>" . htmlspecialchars($row['message']) . "</p>";
        }
    ?>
</body>
</html>
