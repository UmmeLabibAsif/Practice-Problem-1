<?php
session_start();

// Ensure user is logged in
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];

    $sql = "UPDATE User SET name = ?, email = ?, username = ? WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $username, $_SESSION["id"]);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Edit Profile</h1>
    
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user["name"]); ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user["email"]); ?>" required><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user["username"]); ?>" required><br>

        <button type="submit">Save Changes</button>
    </form>

    <button onclick="location.href='index.php'">Cancel</button>
</body>
</html>
