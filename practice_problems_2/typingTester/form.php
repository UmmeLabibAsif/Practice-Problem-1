<?php
session_start();

//Setting the start time when the session is loaded
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title> Typing Speed Test </title>
</head>
<body>
    <h2>Typing Speed Test</h2>
    <p>Type the following passage quickly and acccurately for the Typing Speed Test</p>
    <blockquote>Bobby bought a bunch of bright blue balloons for his big birthday bash.</blockquote>
    <form action = "result.php" method = "post">
        <textarea name = "typed_text" rows = "5" cols = "50" required></textarea><br>
        <button type = "submit"> submit</button>
    </form>
</body>
</html>
