<?php

require "connection.php";

if (isset($_GET["eid"])) {

    $rs =  Database::search("SELECT * FROM `event_images` WHERE `events_evt_id`='" . $_GET["eid"] . "'");

    if ($rs->num_rows != 0) {

        for ($e = 0; $e < $rs->num_rows; $e++) {
            $data = $rs->fetch_assoc();

            $path = $data["eimg_path"];

            if (file_exists($path)) {
                unlink($path);
            }else{
                echo("Image Not Found ? ");
            }

        }

        Database::iud("DELETE FROM `events` WHERE `evt_id`='" . $_GET['eid'] . "'");

        echo("success");
    } else {

        echo ("Error Occured ?");
    }
} else {
    echo ("Data Not Found ?");
}
