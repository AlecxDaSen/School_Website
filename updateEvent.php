<?php

require "connection.php";

$eid = $_POST["eid"];
$etitle = $_POST["eTitle"];
$edesc = $_POST["eDesc"];
$edate = $_POST["eDate"];
$etime = $_POST["eTime"];
$eplace = $_POST["ePlace"];
$eState = $_POST["eState"];
$eLinks = $_POST["eLinks"];
$sid = $_POST["sid"];

function is_valid_description($text) {
    return preg_match('/^[\p{L}\p{N}\p{P}\p{Sm}\p{Sc}\p{Sk}\p{Z}\r\n\t]+$/u', $text);
}


if (empty($etitle)) {
    echo ("Add Event Title");
} else if (strlen($etitle) > 100) {
    echo ("Event title is too long");
} else if (empty($edesc)) {
    echo ("Add description for Event");
} else if (!is_valid_description($edesc)) {
    echo ("Invalid Description? don't add emojis");
} else if (empty($edate)) {
    echo ("Make sure to add event date");
} else if (empty($etime)) {
    echo ("Make sure to add event time");
} else {

    if ($sid == 1) {


        Database::iud("UPDATE `events` SET 
       `title`='" . $etitle . "',`description`='" . $edesc . "',`date`='" . $edate . "',`time`='" . $etime . "',
       `venue`='" . $eplace . "',`evt_state`='" . $eState . "',`links`='" . $eLinks . "',`status_sid`='1' 
       WHERE `evt_id`='" . $eid . "'");
    } else {

        Database::iud("UPDATE `events` SET 
       `title`='" . $etitle . "',`description`='" . $edesc . "',`date`='" . $edate . "',`time`='" . $etime . "',
       `venue`='" . $eplace . "',`evt_state`='" . $eState . "',`links`='" . $eLinks . "',`status_sid`='2' 
       WHERE `evt_id`='" . $eid . "'");
    }


    $length = sizeof($_FILES);


    function saveImage($length, $eid)
    {

    $allowed_img_extensions = [
        "image/jpg"      => ".jpg",
        "image/jpeg"     => ".jpeg",
        "image/png"      => ".png",
        "image/svg+xml"  => ".svg"
    ];

        $imgSearch = Database::search("SELECT * FROM `event_images` WHERE `events_evt_id`='" . $eid . "'");


        if ($imgSearch->num_rows != 0) {

            for ($d = 0; $d < $imgSearch->num_rows; $d++) {

                $imgData = $imgSearch->fetch_assoc();

                $path =  $imgData["eimg_path"];

                if (file_exists($path)) {
                    unlink($path);
                }
            }

            Database::iud("DELETE FROM `event_images` WHERE `events_evt_id`='" . $eid . "'");
        }

        for ($e = 0; $e < $length; $e++) {

            if (isset($_FILES["img" . $e])) {

                $eimage = $_FILES["img" . $e];

                $file_extention  = $eimage["type"];

                // echo ($eimage["tmp_name"]);

                if (array_key_exists($file_extention, $allowed_img_extensions)) {
                    $new_img_extension = $allowed_img_extensions[$file_extention];

                    $file_name = "images/event_images/"."evtImg_" . uniqid() . $new_img_extension;

                    move_uploaded_file($eimage["tmp_name"], $file_name);

                    Database::iud("INSERT INTO `event_images`(`eimg_path`,`events_evt_id`) VALUES ('" . $file_name . "','" . $eid . "')  ");
                } else {
                    echo "Invalid Image type.";
                }
            }
        }
    }


        if ($length > 4 && $eState == 1) {
        saveImage($length, $eid);
    } else if ($length == 1 && $eState == 0) {
        saveImage($length, $eid);
    } else if ($length == 1 && $eState == 1) {
        echo ("Invalid image count add 1 Image .");
    } else if ($length > 4 && $eState == 0) {
        echo ("Invalid image count add 4++ Images .");
    }



    echo ("success");
}
