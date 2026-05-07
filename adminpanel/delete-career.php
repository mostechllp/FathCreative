<?php
session_start();
include 'database.php';

/* Validate ID */
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'Invalid career ID.';
    header('Location: careers.php');
    exit;
}

$career_id = (int) $_GET['id'];

/* Prepare delete */
$stmt = $conn->prepare("DELETE FROM careers WHERE id = ?");
if (!$stmt) {
    $_SESSION['error'] = 'Database error.';
    header('Location: careers.php');
    exit;
}

$stmt->bind_param("i", $career_id);

/* Execute */
if ($stmt->execute()) {
    $_SESSION['success'] = 'Career deleted successfully.';
} else {
    $_SESSION['error'] = 'Failed to delete career.';
}

$stmt->close();
$conn->close();

header('Location: careers.php');
exit;
