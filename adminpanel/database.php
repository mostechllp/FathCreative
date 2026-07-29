<?php
$host = "localhost";
$user = "u323639411_fathcreative";
$password = "2#Spt=o9K#Rt";
$database = "u323639411_fathcreative";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
