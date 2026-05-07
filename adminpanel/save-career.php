<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'database.php';

/* Validate request */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['error'] = 'Invalid request.';
    header('Location: careers.php');
    exit;
}

/* Collect & sanitize data */
$position             = trim($_POST['position'] ?? '');
$details              = $_POST['details'] ?? '';
$job_type              = trim($_POST['job_type'] ?? '');
$location              = trim($_POST['location'] ?? '');
$posted_date           = $_POST['posted_date'] ?? '';
$last_date_to_apply    = $_POST['last_date_to_apply'] ?? '';
$status                = $_POST['status'] ?? 'inactive';

/* Basic validation */
if (
    empty($position) ||
    empty($job_type) ||
    empty($location) ||
    empty($posted_date) ||
    empty($last_date_to_apply) 
) {
    $_SESSION['error'] = 'Please fill all required fields.';
    header('Location: add-career.php');
    exit;
}

/* Prepare insert */
$stmt = $conn->prepare("
    INSERT INTO careers
    (
        position,
        details,
        job_type,
        location,
        posted_date,
        last_date_to_apply,
        status,
        created_at,
        updated_at
    )
    VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())
");

if (!$stmt) {
    $_SESSION['error'] = 'Database prepare failed.';
    header('Location: add-career.php');
    exit;
}

/* Bind parameters */
$stmt->bind_param(
    "sssssss",
    $position,
    $details,
    $job_type,
    $location,
    $posted_date,
    $last_date_to_apply,
    $status,
);

/* Execute */
if ($stmt->execute()) {
    $_SESSION['success'] = 'Career added successfully.';
    header('Location: careers.php');
} else {
    $_SESSION['error'] = 'Failed to add career.';
    header('Location: add-career.php');
}

$stmt->close();
$conn->close();
exit;
