<?php
$host = "localhost";
$dbname = "test";
$username = "root";
$password = "root";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
return $mysqli;
?>
