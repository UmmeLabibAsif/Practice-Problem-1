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
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user["name"]); ?></h1>
    
    <p>Email: <?php echo htmlspecialchars($user["email"]); ?></p>
    <p>Username: <?php echo htmlspecialchars($user["username"]); ?></p>
    
    <button onclick="location.href='edit_user.php'">Edit Profile</button>
    <button onclick="if(confirm('Are you sure?')) { location.href='delete_user.php'; }">Delete Account</button>
</body>
</html>
