<?php

require "connection.php";

$name = $_POST["name"];
$desc = $_POST["description"];

if (empty($name)) {
    echo ("Please add a name");
    exit;
} else if (empty($desc)) {
    echo ("Please add a description");
    exit;
}

$logoPath = null;

// Handle logo upload if provided
if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == UPLOAD_ERR_OK) {
    $logo = $_FILES["logo"];
    $allowed_logo_types = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
    $logo_type = $logo["type"];

    if (!in_array($logo_type, $allowed_logo_types)) {
        echo ("Please select a valid logo image.");
        exit;
    }

    $ext = match ($logo_type) {
        "image/jpg" => ".jpg",
        "image/jpeg" => ".jpeg",
        "image/png" => ".png",
        "image/svg+xml" => ".svg",
    };

    $logoPath = "images/clubImg/logo_" . $name . "_" . uniqid() . $ext;
    move_uploaded_file($logo["tmp_name"], $logoPath);
}

// Insert club with or without logo
Database::iud("INSERT INTO `clubs` (`title`, `description`, `status_sid`, `logo`) VALUES 
    ('" . $name . "', '" . $desc . "', 1, '" . $logoPath . "')");

// Get the ID of the newly inserted club
$club_rs = Database::search("SELECT `club_id` FROM `clubs` WHERE `title`='" . $name . "' ORDER BY `club_id` DESC LIMIT 1");
$club_data = $club_rs->fetch_assoc();
$club_id = $club_data["club_id"] ?? null;

if (!$club_id) {
    echo ("Failed to retrieve club ID.");
    exit;
}

// Handle club image if provided
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $image = $_FILES["image"];
    $allowed_image_types = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
    $image_type = $image["type"];

    if (!in_array($image_type, $allowed_image_types)) {
        echo ("Please select a valid club image.");
        exit;
    }

    $ext = match ($image_type) {
        "image/jpg" => ".jpg",
        "image/jpeg" => ".jpeg",
        "image/png" => ".png",
        "image/svg+xml" => ".svg",
    };

    $imagePath = "images/clubImg/" . $name . "_" . uniqid() . $ext;
    move_uploaded_file($image["tmp_name"], $imagePath);

    Database::iud("INSERT INTO `club_images` (`climg_path`, `clubs_club_id`) VALUES 
        ('" . $imagePath . "', '" . $club_id . "')");
}

echo "success";
