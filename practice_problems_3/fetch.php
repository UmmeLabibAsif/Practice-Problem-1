<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM User";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("SQL Error: " . $mysqli->error);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $users = $result->fetch_all(MYSQLI_ASSOC);  

    if ($users) {
        session_start();

        foreach ($users as $user) {
            echo "User ID: " . $user["id"] . "<br>";
            echo "Name: " . $user["name"] . "<br>";
            echo "Email: " . $user["email"] . "<br>";
            echo "Username: " . $user["username"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No users found.";
    }
    exit;
}
?>
