<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["em"])){

    $email = $_GET["em"];
    
    $rs = Database::search("SELECT * FROM user WHERE email='".$email."'");
    $n = $rs->num_rows;

    if($n == 1){

        $code = uniqid();

        Database::iud("UPDATE user SET verification_code='".$code."' WHERE email='".$email."'");
        
        $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'alecxenderkhdp@gmail.com';
            $mail->Password = 'kprirjgjkkharrbn';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('alecxenderkhdp@gmail.com', 'Reset Forgot Password');
            $mail->addReplyTo('alecxenderkhdp@gmail.com', 'Reset Forgot Password');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Forgot Password Verification Code';
            $bodyContent = '<h1 style="color:#61c5b4">Your Verification code is <b style="color:#f7a043;">' . $code . '</b></h1>';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification code sending failed';
            } else {
                echo 'success';
            }

    }else{
        echo ("Invalid Email Address");
    }

}

?>