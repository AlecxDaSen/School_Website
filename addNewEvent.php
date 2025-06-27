<?php

require "connection.php";

$etitle = $_POST["etitle"];
$edesc = $_POST["eDesc"];
$edate = $_POST["eDate"];
$etime = $_POST["eTime"];
$eplace = $_POST["ePlace"];
$eState = $_POST["eState"];
$eLinks = $_POST["eLinks"];
$sid = $_POST["sid"];

// echo($eState);
function is_valid_text($text) {
     return preg_match('/^[\p{L}\p{N}\p{P}\p{Sm}\p{Sc}\p{Sk}\p{Z}\r\n\t]+$/u', $text);
}


if (empty($etitle)) {
    echo ("Add Event Title");
} else if (strlen($etitle) > 100) {
    echo ("News title is too long");
} else if (empty($edesc)) {
    echo ("Add description for Event");
} else if (empty($edate)) {
    echo ("Make sure to add event date");
} else if(!is_valid_text($edesc)){
    echo("Invalid Description? don't add emojis");
} else if (empty($etime)) {
    echo ("Make sure to add Time");
} else if (empty($eplace)) {
    echo ("Describe the place that Event held on");
} else if (sizeof($_FILES)== 0) {
    echo ("Please select Images");
} else if($eState == 0 && sizeof($_FILES)>0 && sizeof($_FILES)>1 ){
    echo("Please select only one Image");
}else if($eState == 1 && sizeof($_FILES)>0 && sizeof($_FILES)< 4 ){
    echo("Please add more than 4 Images");
}else{

    $result = Database::search("SELECT * FROM `events` 
    WHERE  `title`='" . $etitle . "' AND `date`='" . $edate . "' AND `time`='" . $etime . "' AND `venue`='" . $eplace . "' ");

    if ($result->num_rows != 0) {

        echo ("This news already exist ?");

    } else {

        function saveImage($etitle, $edate,$etime,$eplace)
        {

            $allowed_img_extensions = [
                "image/jpg"      => ".jpg",
                "image/jpeg"     => ".jpeg",
                "image/png"      => ".png",
                "image/svg+xml"  => ".svg"
            ];

            $length = sizeof($_FILES);

            for ($x = 0; $x <  $length; $x++) {

                $image_file = $_FILES["img" . $x];
                $file_extention  = $image_file["type"];

                if (isset($_FILES["img" . $x])) {

                    if (array_key_exists($file_extention, $allowed_img_extensions)) {
                        $new_img_extension = $allowed_img_extensions[$file_extention];

                        $file_name = "images/event_images/" . "evtImg_". uniqid() . $new_img_extension;
                        move_uploaded_file($image_file["tmp_name"], $file_name);

                        $search = Database::search("SELECT * FROM `events`
                         WHERE  `title`='" . $etitle . "' AND `date`='" . $edate . "' AND `time`='".$etime."'  AND `venue`='" . $eplace . "'");

                        // echo($search->num_rows);
                        $data = $search->fetch_assoc();

                        Database::iud("INSERT INTO `event_images`(`eimg_path`, `events_evt_id`)
                         VALUES ('" . $file_name . "','" . $data['evt_id'] . "') ");

                    } else {
                        echo "Invalid Image type.";
                    }
                }
            }
        }

        if(empty($eLinks)){
            $eLinks = "NaN";
        }

        if ($sid == 1) {

            Database::iud("INSERT INTO `events` (`title`,`description`,`date`,`time`,`venue`,`evt_state`,`links`,`status_sid`) 
        VALUES ('" . $etitle . "','" . $edesc . "','" . $edate . "','".$etime."','".$eplace."','".$eState."','".$eLinks."','1')");
            saveImage($etitle, $edate,$etime,$eplace);
            echo ("success1");
        } else {
            Database::iud("INSERT INTO `events` (`title`,`description`,`date`,`time`,`venue`,`evt_state`,`links`,`status_sid`) 
        VALUES ('" . $etitle . "','" . $edesc . "','" . $edate . "','".$etime."','".$eplace."','".$eState."','".$eLinks."','2')");
            saveImage($etitle, $edate,$etime,$eplace);
            echo ("success2");
        }
    }
}
