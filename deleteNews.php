<?php

require "connection.php";

if (isset($_GET["nid"])) {

    $rs =  Database::search("SELECT * FROM `news_images` WHERE `news_news_id`='" . $_GET["nid"] . "'");

    if ($rs->num_rows != 0) {

        $data = $rs->fetch_assoc();

        $path = $data["nimg_path"];

        if (file_exists($path)) {
            unlink($path);

            Database::iud("DELETE FROM `news` WHERE `news_id`='" . $_GET['nid'] . "'");
            echo ("success1");
          

        } else {
            echo "Image file not found.";
        }
    } else {
        
        echo ("Error Occured ?");
    }
} else {
    echo ("Data Not Found ?");
}
