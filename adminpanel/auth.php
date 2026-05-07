<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // DO NOT escape password

    // Get user by username only
    $query = "SELECT * FROM auth WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        // Verify hashed password
        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['type'] = $user['type'];

            header("Location: index.php");
            exit;

        } else {
            echo "<script>alert('Invalid username or password'); window.location.href='login.php';</script>";
        }

    } else {
        echo "<script>alert('Invalid username or password'); window.location.href='login.php';</script>";
    }
}
?>