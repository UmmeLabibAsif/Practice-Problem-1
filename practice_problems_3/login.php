<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM User WHERE email = ?";
    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("SQL Error: " . $mysqli->error);
    }

    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if ($_POST["password"] === $user["password"]) {
            echo "Login successful!";
            print_r($_POST);

            session_start();
            $_SESSION["id"] = $user["id"];
            header("Location: index.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <h1>login</h1>

    <form method="post">
    <div>
        <label for="email"> Email </label>
        <input type = "text" id="email" name="email">
    </div>

    <div>
        <label for="password"> Password </label>
        <input type = "password" id="password" name="password">
    </div>

    <button>login</button>
    </form>
</body>
</html>
