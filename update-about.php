<?php

// Path to JSON file
$json_file = "about-data.json";

// Load existing data
$data = [];
if (file_exists($json_file)) {
    $json = file_get_contents($json_file);
    $data = json_decode($json, true);
}

// --- Update Summary ---
if (isset($_POST["update_summary"])) {
    $data["history_summary"] = $_POST["history_summary"];
}

// --- Update History ---
if (isset($_POST["update_history"])) {
    $data["full_history"] = $_POST["full_history"];
}

// --- Add Principal ---
if (isset($_POST["add_principal"])) {
    $data["principal"]["name"] = $_POST["new_principal_name"];
    $data["principal"]["message"] = $_POST["new_principal_message"];

    // Handle image upload
    if (isset($_FILES["new_principal_image"]) && $_FILES["new_principal_image"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $fileName = time() . "_" . basename($_FILES["new_principal_image"]["name"]);
        $targetPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES["new_principal_image"]["tmp_name"], $targetPath)) {
            $data["principal"]["image"] = $targetPath;
        }
    }
}

// Save data back to JSON file
file_put_contents($json_file, json_encode($data, JSON_PRETTY_PRINT));

// ✅ Redirect back to form page
header("Location: adminPanel.php?success=1");
exit;
