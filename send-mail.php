<?php
// Prevent any stray output or notices before JSON
if (ob_get_level()) {
    ob_end_clean();
}
ob_start();

if (!headers_sent()) {
    header('Content-Type: application/json; charset=UTF-8');
}

error_reporting(0);
ini_set('display_errors', 0);

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method. POST is required.'
    ]);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';
require __DIR__ . '/PHPMailer/src/Exception.php';

// Extract & Sanitize form inputs
$name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$email   = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone   = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
$source  = isset($_POST['source']) ? trim(strip_tags($_POST['source'])) : '';

// Validation
if ($name === '') {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your full name.']);
    exit;
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter a valid email address.']);
    exit;
}

if ($phone === '') {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your contact phone number.']);
    exit;
}

// Determine if request is from the Homepage Popup or Contact Form
$isPopup = (stripos($source, 'popup') !== false || stripos($source, 'home') !== false);

if ($isPopup) {
    $subject        = "Homepage Popup Inquiry - " . $name;
    $successMessage = "Popup inquiry sent successfully!";
    $leadSource     = !empty($source) ? $source : "Homepage Popup";
} else {
    $subject        = "Contact Form Message" . (!empty($name) ? " - " . $name : "");
    $successMessage = "Contact mail sent successfully!";
    $leadSource     = "Contact Form";
}

// Construct Plain Text Body (Matching contact page format)
$bodyLines = [
    "Source: " . $leadSource,
    "Name: " . $name,
    "Email: " . $email,
    "Phone: " . $phone,
    "",
    "Message:",
    !empty($message) ? $message : "(No message provided)"
];
$body = implode("\n", $bodyLines);

try {
    $mail = new PHPMailer(true);

    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mostechtesting@gmail.com';
    $mail->Password   = 'xnovvlqkaygtdqpt';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';

    // Email Addresses
    $mail->setFrom('mostechtesting@gmail.com', 'Fath Creative');
    $mail->addAddress('info@fathcreative.com');
    $mail->addReplyTo($email, $name);

    // Content
    $mail->Subject = $subject;
    $mail->Body    = $body;

    $mail->send();

    $response = [
        "status"  => "success",
        "message" => $successMessage
    ];
} catch (Exception $e) {
    $response = [
        "status"  => "error",
        "message" => "Mailer Error: " . $mail->ErrorInfo
    ];
}

if (ob_get_level()) {
    ob_clean();
}
echo json_encode($response);
exit;