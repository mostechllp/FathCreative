<?php
header('Content-Type: application/json');

error_reporting(0);
ini_set('display_errors', 0);

ob_clean();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$response = [];

try {
    $mail = new PHPMailer(true);

    // SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mostechtesting@gmail.com';
    $mail->Password   = 'xnovvlqkaygtdqpt';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Email
    $mail->setFrom('mostechtesting@gmail.com', 'Fath Creative');
    $mail->addAddress('info@fathcreative.com');
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    $mail->Subject = "Contact Form Message";
    $mail->Body =
        "Name: " . $_POST['name'] . "\n" .
        "Email: " . $_POST['email'] . "\n" .
        "Phone: " . $_POST['phone'] . "\n\n" .
        "Message:\n" . $_POST['message'];

    $mail->send();

    $response = [
        "status" => "success",
        "message" => "Contact mail sent successfully!"
    ];

} catch (Exception $e) {
    $response = [
        "status" => "error",
        "message" => $mail->ErrorInfo
    ];
}

echo json_encode($response);
exit;