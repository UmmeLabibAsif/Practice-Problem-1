<?php
session_start();

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit;
}

$mysqli = require __DIR__ . "/database.php";
$sql = "SELECT * FROM User WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $_SESSION["id"]);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// If form is submitted, delete user
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = "DELETE FROM User WHERE id = ?";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $_SESSION["id"]);
        $stmt->execute();

        // Log out user after deleting their account
        session_unset();
        session_destroy();

        header("Location: login.php");
        exit;
    } else {
        die("SQL Error: " . $mysqli->error);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Delete User</h1>
    
    <form method="post">
        <p>Are you sure you want to delete your account?</p>
        <button type="submit">Yes, delete my account</button>
    </form>

    <button onclick="location.href='index.php'">Cancel</button>
</body>
</html>
