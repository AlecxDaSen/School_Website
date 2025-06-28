<?php

require "connection.php";

if (isset($_POST["email"]) && isset($_POST["otp"])) {
    $email = $_POST["email"];
    $npw = $_POST["npw"];
    $otp = $_POST["otp"];

    $serch = Database::search("SELECT * FROM `user` WHERE `verification_code`='" . $otp . "' AND `email`='" . $email . "'");

    if ($serch->num_rows != 0) {

        $data = $serch->fetch_assoc();

        if ($data["password"] == $npw) {

            Database::iud("UPDATE `user` SET `password`='" . $npw . "' WHERE `email`='" . $email . "'");
            echo ("success");

        } else {
            echo ("Existing password match with new One ? please Log In");
        }
    } else {
        echo ("Invalid OTP");
    }
} else {

    echo ("Data missing error ?");
}
