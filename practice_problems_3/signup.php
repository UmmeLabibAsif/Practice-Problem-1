<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["name"])) {
        echo "Name is required";
        exit;
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    if (strlen($_POST["password"]) < 8) {
        echo "Password must be at least 8 characters long";
        exit;
    }

    if ($_POST["password"] !== $_POST["password_confirmation"]) {
        echo "Passwords do not match";
        exit;
    }

    $mysqli = require __DIR__ . "/database.php";
    $sql = "INSERT INTO User (name, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        echo "SQL Error: " . $mysqli->error;
        exit;
    }

    $stmt->bind_param("ssss", $_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"]);

    if ($stmt->execute()) {
        echo "<h2>Signup successful!</h2><p>You can now <a href='login.php'>login here</a>.</p>";
    } else {
        echo "Error: Could not register user.";
    }

    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <h1> Signup Form</h1>

    <div id="response"></div>

    <form id="signupForm" method="post" novalidate>
        <div>
            <label for="name"> Name </label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email"> Email </label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="username"> Username </label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="password"> Password </label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation"> Repeat Password </label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit">Signup</button>
    </form>

    <script>
        $(document).ready(function () {
            $("#signupForm").submit(function (e) {
                e.preventDefault(); 

                $.ajax({
                    type: "POST",
                    url: "signup.php", 
                    data: $(this).serialize(),
                    success: function (response) {
                        $("#response").html(response);
                        $("#signupForm").hide();
                    },
                    error: function () {
                        $("#response").html("There was an error. Please try again.");
                    }
                });
            });
        });
    </script>
</body>
</html>
