<?php
session_start();
include 'database.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = "Invalid blog ID.";
    header("Location: blogs.php");
    exit;
}

$id = (int) $_GET['id'];

/* Get image */
$stmt = $conn->prepare("SELECT blog_image FROM blogs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
$stmt->close();

/* Delete blog */
$stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

/* Delete image */
if ($image && file_exists(__DIR__ . '/uploads/' . $image)) {
    unlink(__DIR__ . '/uploads/' . $image);
}

/* ✅ Success message */
$_SESSION['success'] = "Project deleted successfully.";

header("Location: projects.php");
exit;
