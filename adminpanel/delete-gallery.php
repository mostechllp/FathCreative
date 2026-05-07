<?php
session_start();
include 'database.php';

$id = (int)$_GET['id'];

$result = mysqli_query($conn, "SELECT image FROM gallery WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($row) {
    $file = 'uploads/gallery/' . $row['image'];
    if (file_exists($file)) {
        unlink($file);
    }

    mysqli_query($conn, "DELETE FROM gallery WHERE id=$id");
    $_SESSION['success'] = "Image deleted successfully";
} else {
    $_SESSION['error'] = "Image not found";
}

header("Location: gallery.php");
exit;
