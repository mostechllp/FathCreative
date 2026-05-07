<?php
$host = "localhost";
$user = "u381641708_fathcreative";
$password = "O5f^sAdXQ";
$database = "u381641708_fathcreative";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
