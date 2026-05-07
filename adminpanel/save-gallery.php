<?php
session_start();
include 'database.php';

if (empty($_FILES['gallery_images']['name'][0])) {
    $_SESSION['error'] = "Please select at least one image";
    header("Location: add-gallery.php");
    exit;
}

$uploadDir = 'uploads/gallery/';

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$allowedTypes = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];

$stmt = $conn->prepare("INSERT INTO gallery (image, created_at) VALUES (?, NOW())");

foreach ($_FILES['gallery_images']['tmp_name'] as $key => $tmpName) {

    if ($_FILES['gallery_images']['error'][$key] !== 0) {
        continue;
    }

    $type = $_FILES['gallery_images']['type'][$key];

    if (!in_array($type, $allowedTypes)) {
        continue;
    }

    $fileName = time() . '_' . rand(1000, 9999) . '_' . $_FILES['gallery_images']['name'][$key];
    $filePath = $uploadDir . $fileName;

    if (move_uploaded_file($tmpName, $filePath)) {
        $stmt->bind_param("s", $fileName);
        $stmt->execute();
    }
}

$_SESSION['success'] = "Images uploaded successfully";
header("Location: gallery.php");
exit;
