<?php

session_start();

require "connection.php";


$em = $_POST["em"];
$pw = $_POST["pw"];
$che = $_POST["che"];

if (empty($em)) {
    echo ("Please enter Email Address");
} else if (strlen($em) >= 100) {
    echo ("Email must contain less than 100 characters !");
} else if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email Address");
} else if (empty($pw)) {
    echo ("Please enter Password !");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $em . "' 
    AND `password`='" . $pw . "'");
    $n = $rs->num_rows;
    $d = $rs->fetch_assoc();

    if ($n == 1) {

        if ($d["user_type_usert_id"] == 1) {
      
                $_SESSION["au"] = $d;

                if ($che == "true") {
                    setcookie("email", $em, time() + (60 * 60 * 24 * 365));
                    setcookie("password", $pw, time() + (60 * 60 * 24 * 365));
                } else {
                    setcookie("email", "", -1);
                    setcookie("password", "", -1);
                }
            
                echo("success");
        }
    } else {
        echo ("Invalid Username or Password ");
    }
}
