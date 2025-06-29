<?php

require "connection.php";

$ntitle = $_POST["ntitle"];
$ndesc = $_POST["ndesc"];
$ndate = $_POST["ndate"];
$id = $_POST["id"];

function is_valid_text($text) {
    return preg_match('/^[\p{L}\p{N}\p{P}\p{Sm}\p{Sc}\p{Sk}\p{Z}\r\n\t]+$/u', $text);
}

if (empty($ntitle)) {
    echo ("Add news Title");
} else if (strlen($ntitle) > 50) {
    echo ("News title is too long");
} else if (empty($ndesc)) {
    echo ("Add description for News");
}  else if(!is_valid_text($ndesc)){
    echo("Invalid Description? don't add emojis");
} else if (empty($ndate)) {
    echo ("Make sure to add news date");
} else if (!isset($_FILES["nimage"])) {
    echo ("Please select Image");
} else {

    $result = Database::search("SELECT * FROM `news` WHERE  `title`='" . $ntitle . "' AND `datetime`='" . $ndate . "' ");

    if ($result->num_rows != 0) {

        echo ("This news already exist ?");
    } else {
        if (isset($_FILES["nimage"])) {

            $nimage = $_FILES["nimage"];
        }

        function saveImage($nimage, $ntitle, $ndate)
        {



            $file_extention  = $nimage["type"];

            $allowed_img_extensions = [
                "image/jpg"      => ".jpg",
                "image/jpeg"     => ".jpeg",
                "image/png"      => ".png",
                "image/svg+xml"  => ".svg"
            ];

            if (array_key_exists($file_extention, $allowed_img_extensions)) {
                $new_img_extension = $allowed_img_extensions[$file_extention];

                $file_name = "images/news_images/" . "newsImg_" . uniqid() . $new_img_extension;
                move_uploaded_file($nimage["tmp_name"], $file_name);

                $search = Database::search("SELECT * FROM `news` WHERE  `title`='" . $ntitle . "' AND `datetime`='" . $ndate . "' ");

                $data = $search->fetch_assoc();

                Database::iud("INSERT INTO `news_images`(`nimg_path`, `news_news_id`) VALUES ('" . $file_name . "','" . $data['news_id'] . "') ");
            } else {
                echo "Invalid Image type.";
            }
        }
        if ($id == 1) {

            Database::iud("INSERT INTO `news` (`title`,`description`,`datetime`,`special_facts`,`status_sid`) 
        VALUES ('" . $ntitle . "','" . $ndesc . "','" . $ndate . "',' ','1')");
            saveImage($nimage, $ntitle, $ndate);
            echo ("success1");
        } else {
            Database::iud("INSERT INTO `news` (`title`,`description`,`datetime`,`special_facts`,`status_sid`) 
        VALUES ('" . $ntitle . "','" . $ndesc . "','" . $ndate . "',' ','2')");
            saveImage($nimage, $ntitle, $ndate);
            echo ("success2");
        }
    }
}
