<?php

require "connection.php";

$nid = $_POST["nid"];
$ntitle = $_POST["ntitle"];
$ndesc = $_POST["ndesc"];
$ndate = $_POST["ndate"];
$sid = $_POST["sid"];

function is_valid_text($text)
{
    return preg_match('/^[\p{L}\p{N}\p{P}\p{Sm}\p{Sc}\p{Sk}\p{Z}\r\n\t]+$/u', $text);
}

if (empty($ntitle)) {
    echo ("Add news Title");
} else if (strlen($ntitle) > 50) {
    echo ("News title is too long");
} else if (empty($ndesc)) {
    echo ("Add description for News");
} else if (!is_valid_text($ndesc)) {
    echo ("Invalid Description? don't add emojis");
} else if (empty($ndate)) {
    echo ("Make sure to add news date");
} else {

    if ($sid == 1) {


        Database::iud("UPDATE `news` SET 
   `title`='" . $ntitle . "',`description`='" . $ndesc . "',`datetime`='" . $ndate . "',`status_sid`='1' 
   WHERE `news_id`='" . $nid . "'");
    } else {

        Database::iud("UPDATE `news` SET 
   `title`='" . $ntitle . "',`description`='" . $ndesc . "',`datetime`='" . $ndate . "',`status_sid`='2' 
   WHERE `news_id`='" . $nid . "'");
    }

    if (isset($_FILES["img"])) {

        $nimage = $_FILES["img"];

        $file_extention  = $nimage["type"];

        $allowed_img_extensions = [
            "image/jpg"      => ".jpg",
            "image/jpeg"     => ".jpeg",
            "image/png"      => ".png",
            "image/svg+xml"  => ".svg"
        ];

        if (array_key_exists($file_extention, $allowed_img_extensions)) {
            $new_img_extension = $allowed_img_extensions[$file_extention];

            $imgSearch = Database::search("SELECT * FROM `news_images` WHERE `news_news_id`='" . $nid . "'");

            $file_name;

            if ($imgSearch->num_rows == 1) {

                $imgData = $imgSearch->fetch_assoc();

                $path = explode(".", $imgData["nimg_path"]);

                // echo($path[0]);
                $file_name = $path[0] . $new_img_extension;
                // echo($file_name);

            } else {

                $file_name = "images/news_images/"  . "newsImg_" . uniqid() . $new_img_extension;
            }

            move_uploaded_file($nimage["tmp_name"], $file_name);

            Database::iud("UPDATE `news_images` SET `nimg_path`='" . $file_name . "'  WHERE  `news_news_id`='" . $nid . "' ");
        } else {
            echo "Invalid Image type.";
        }
    }

    echo ("success");
}
