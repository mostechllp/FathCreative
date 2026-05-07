<?php
session_start();
include 'database.php';

$title       = $_POST['blog_title'];
$description = $_POST['blog_description'];
$details     = $_POST['blog_details'];
$date        = $_POST['blog_date'];
$location        = $_POST['blog_location'];

$imageName = null;

if (!empty($_FILES['blog_image']['name'])) {
    $imageName = time() . '_' . basename($_FILES['blog_image']['name']);
    move_uploaded_file(
        $_FILES['blog_image']['tmp_name'],
        __DIR__ . '/uploads/projects/' . $imageName
    );
}

$stmt = $conn->prepare("
    INSERT INTO blogs
    (blog_title, blog_description, blog_details, blog_date, blog_location, blog_image)
    VALUES (?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssss",               
    $title,
    $description,
    $details,
    $date,
    $location,
    $imageName
    );

$stmt->execute();

$_SESSION['success'] = "Project added successfully.";

header("Location: projects.php");
exit;
