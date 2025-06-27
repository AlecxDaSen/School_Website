<?php

require "connection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$desc = $_POST["description"];
$active = $_POST["is_active"];

if (empty($id)) {
    echo "Club ID is missing.";
    exit;
}
if (empty($name)) {
    echo "Please add a name.";
    exit;
}
if (empty($desc)) {
    echo "Please add a description.";
    exit;
}

// Check if club exists
$club_rs = Database::search("SELECT * FROM `clubs` WHERE `club_id` = '" . $id . "'");
if ($club_rs->num_rows == 0) {
    echo "Club not found.";
    exit;
}

$logoPath = null;
$imagePath = null;

// Handle logo update (optional)
if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == UPLOAD_ERR_OK) {
    $logo = $_FILES["logo"];
    $allowed_logo_types = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
    $logo_type = $logo["type"];

    if (!in_array($logo_type, $allowed_logo_types)) {
        echo "Please select a valid logo image.";
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

    // Update only logo field
    Database::iud("UPDATE `clubs` SET `logo` = '" . $logoPath . "' WHERE `club_id` = '" . $id . "'");
}

// Handle image update (optional)
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $image = $_FILES["image"];
    $allowed_image_types = ["image/jpg", "image/jpeg", "image/png", "image/svg+xml"];
    $image_type = $image["type"];

    if (!in_array($image_type, $allowed_image_types)) {
        echo "Please select a valid club image.";
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

    // Check if image already exists for club
    $img_rs = Database::search("SELECT * FROM `club_images` WHERE `clubs_club_id` = '" . $id . "'");
    if ($img_rs->num_rows > 0) {
        // Update existing image
        Database::iud("UPDATE `club_images` SET `climg_path` = '" . $imagePath . "' WHERE `clubs_club_id` = '" . $id . "'");
    } else {
        // Insert new image
        Database::iud("INSERT INTO `club_images` (`climg_path`, `clubs_club_id`) VALUES 
            ('" . $imagePath . "', '" . $id . "')");
    }
}

// Update name and description
Database::iud("UPDATE `clubs` SET `title` = '" . $name . "', `description` = '" . $desc . "', `status_sid` = '" . $active . "' WHERE `club_id` = '" . $id . "'");

echo "success";

?>
