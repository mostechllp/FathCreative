<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include 'database.php';
include '../helpers.php';

$id          = intval($_POST['id']);
$title       = $_POST['blog_title'];
$description = $_POST['blog_description'];

$blog_meta_title = $_POST['blog_meta_title'];
$blog_meta_description = $_POST['blog_meta_description'];
$details     = $_POST['blog_details'];
$date        = $_POST['blog_date'];
$end_date        = $_POST['end_date'];
$location    = $_POST['blog_location'];
$slug_url    = $_POST['slug'];

// Fetch current slug/title first
$current = $conn->query("SELECT blog_title, slug FROM blogs WHERE id = " . intval($id))->fetch_assoc();

if ($current['slug'] !== $slug_url || $current['slug'] == NULL) {
    $slug = $slug_url;
} else {
    $slug = $current['slug']; 
}

if (!empty($_FILES['blog_image']['name'])) {
    // Has new image
    $imageName = time() . '_' . basename($_FILES['blog_image']['name']);
    move_uploaded_file(
        $_FILES['blog_image']['tmp_name'],
        __DIR__ . '/uploads/projects/' . $imageName
    );

    $stmt = $conn->prepare("
        UPDATE blogs 
        SET slug=?, blog_title=?, blog_description=?, blog_meta_title=?, blog_meta_description=?, blog_details=?, blog_date=?, end_date=?, blog_location=?, blog_image=? 
        WHERE id=?
    ");
    $stmt->bind_param("ssssssssssi", $slug, $title, $description, $blog_meta_title, $blog_meta_description, $details, $date, $end_date, $location, $imageName, $id);
} else {
    // No new image
    $stmt = $conn->prepare("
        UPDATE blogs 
        SET slug=?, blog_title=?, blog_description=?, blog_meta_title=?, blog_meta_description=?, blog_details=?, blog_date=?, end_date=?, blog_location=? 
        WHERE id=?
    ");
    $stmt->bind_param("sssssssssi", $slug, $title, $description, $blog_meta_title, $blog_meta_description, $details, $date, $end_date, $location, $id);
}

$stmt->execute();

$_SESSION['success'] = "Project updated successfully.";

header("Location: projects.php");
exit;
