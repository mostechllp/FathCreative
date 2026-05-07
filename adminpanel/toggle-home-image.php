<?php
session_start();
include 'database.php';

$id = (int) $_POST['id'];
$currentStatus = (int) $_POST['status'];

$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM gallery WHERE status = 1");
$row = mysqli_fetch_assoc($result);
$homeCount = $row['total'];

if ($currentStatus == 0) {
    if ($homeCount >= 6) {
        $_SESSION['error'] = "You can select only 6 images for Home page";
        header("Location: gallery.php");
        exit;
    } 
    $newStatus = 1;
} 
else {
    $newStatus = 0;
}

mysqli_query($conn, "UPDATE gallery SET status = $newStatus WHERE id = $id");

header("Location: gallery.php");
exit;
