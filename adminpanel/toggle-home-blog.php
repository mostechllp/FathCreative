<?php
session_start();
include 'database.php';

$id = (int) $_POST['id'];
$currentStatus = (int) $_POST['status'];

$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM blogs WHERE status = 1");
$row = mysqli_fetch_assoc($result);
$homeCount = $row['total'];

if ($currentStatus == 0) {

    if ($homeCount >= 10) {
        $_SESSION['error'] = "Only 10 blogs can be shown on Home page";
        header("Location: blogs.php");
        exit;
    }

    $orders = [];
    $res = mysqli_query(
        $conn,
        "SELECT sort_order FROM blogs 
         WHERE status = 1 
         ORDER BY sort_order ASC"
    );

    while ($r = mysqli_fetch_assoc($res)) {
        $orders[] = (int)$r['sort_order'];
    }

    $sortOrder = 1;
    foreach ($orders as $o) {
        if ($o == $sortOrder) {
            $sortOrder++;
        } else {
            break;
        }
    }

    mysqli_query($conn, "
        UPDATE blogs 
        SET status = 1, sort_order = $sortOrder 
        WHERE id = $id
    ");

} else {

    mysqli_query($conn, "
        UPDATE blogs 
        SET status = 0, sort_order = 0 
        WHERE id = $id
    ");

}

header("Location: blogs.php");
exit;
