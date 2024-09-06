<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Form</title>
</head>
<body>
    <h2>Simple Form</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (!empty($name) && !empty($email)) {
            echo "Name: " . ($name) . "<br>";
            echo "Email: " . ($email) . "<br>";
        } else {
            echo "Please fill in both fields.";
        }
    } 
    else {
    ?>
        <form action="" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <button type="submit">Submit</button>
        </form>
        <?php
    }
    ?>
</body>
</html>
