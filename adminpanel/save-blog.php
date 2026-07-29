<?php
session_start();
include 'database.php';
include '../helpers.php';

$title       = $_POST['blog_title'];
$description = $_POST['blog_description'];
$blog_meta_title = $_POST['blog_meta_title'];
$blog_meta_description = $_POST['blog_meta_description'];
$details     = $_POST['blog_details'];
$date        = $_POST['blog_date'];
$end_date        = $_POST['end_date'];
$location        = $_POST['blog_location'];
$slug = $_POST['slug'];

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
    (slug, blog_title, blog_description, blog_meta_title, blog_meta_description, blog_details, blog_date, end_date, blog_location, blog_image)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssssssss",  
    $slug,
    $title,
    $description,
    $blog_meta_title,
    $blo_meta_description,
    $details,
    $date,
    $end_date,
    $location,
    $imageName
    );

$stmt->execute();

$_SESSION['success'] = "Project added successfully.";

header("Location: projects.php");
exit;
