<?php
header("Content-Type: application/json");

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$amount = $_POST["amount"] ?? "";
$msg = $_POST["msg"] ?? "";

// Input Validation
if (empty($name)) {
    echo json_encode(["status" => "error", "message" => "Please enter your Name!"]);
    exit;
}

if (strlen($name) > 50) {
    echo json_encode(["status" => "error", "message" => "Name must have less than 50 characters"]);
    exit;
}

if (empty($email)) {
    echo json_encode(["status" => "error", "message" => "Please enter your Email!"]);
    exit;
}

if (strlen($email) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "Invalid Email!"]);
    exit;
}

if (empty($amount) || !is_numeric($amount) || $amount <= 0) {
    echo json_encode(["status" => "error", "message" => "Please enter a valid amount"]);
    exit;
}

if (empty($msg)) {
    echo json_encode(["status" => "error", "message" => "Please leave a message!"]);
    exit;
}

if (strlen($msg) > 500) {
    echo json_encode(["status" => "error", "message" => "Message too long (max 500 characters)"]);
    exit;
}

// All validations passed, generate order ID
$id = mt_rand(1000000000, 9999999999); // 10-digit order ID

echo json_encode([
    "status" => "success",
    "id" => $id
]);
?>
