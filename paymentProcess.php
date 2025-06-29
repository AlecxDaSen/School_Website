<?php
require "connection.php";
header("Content-Type: application/json");

$fname = $_POST["fname"] ?? "";
$lname = $_POST["lname"] ?? "";
$email = $_POST["email"] ?? "";
$mobile = $_POST["mobile"] ?? "";
$amount = $_POST["amount"] ?? "";
$msg = $_POST["msg"] ?? "";


// Input Validation
if (empty($fname)) {
    echo json_encode(["status" => "error", "message" => "Please enter your First Name!"]);
    exit;
} else if (strlen($fname) > 50) {
    echo json_encode(["status" => "error", "message" => "Name must have less than 50 characters"]);
    exit;
}
if (empty($lname)) {
    echo json_encode(["status" => "error", "message" => "Please enter your Last Name!"]);
    exit;
} else if (strlen($lname) > 50) {
    echo json_encode(["status" => "error", "message" => "Name must have less than 50 characters"]);
    exit;
} else if (empty($email)) {
    echo json_encode(["status" => "error", "message" => "Please enter your Email!"]);
    exit;
} else if (strlen($email) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "Invalid Email!"]);
    exit;
}
if (empty($mobile)) {
    echo json_encode(["status" => "error", "message" => "Please enter your Mobile!"]);
    exit;
} else if (strlen($mobile) > 10 || !preg_match('/^07\d{8}$/', $mobile)) {
    echo json_encode(["status" => "error", "message" => "Invalid Mobile!"]);
    exit;
} else if (empty($amount) || !is_numeric($amount) || $amount <= 0) {
    echo json_encode(["status" => "error", "message" => "Please enter a valid amount"]);
    exit;
} else if (empty($msg)) {
    echo json_encode(["status" => "error", "message" => "Please leave a message!"]);
    exit;
} else if (strlen($msg) > 500) {
    echo json_encode(["status" => "error", "message" => "Message too long (max 500 characters)"]);
    exit;
} else {


    $merchant_id = 1221315;
    $merchant_secret = 'ODQ2MjM1ODE0Mjc5MDE1MjYxMTM3NzU4MjU5NDgyOTUwOTEwMTgz';
    $currency = 'LKR';
    $order_id = mt_rand(1000000000, 9999999999); // 10-digit order ID

    $hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

   
    // All validations passed, generate order ID

    echo json_encode([
        "status" => "success",
        "id" => $order_id,
        "hash"=> $hash
    ]);
}
