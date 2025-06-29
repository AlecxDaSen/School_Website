<?php
require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST["email"])) {

    $email = $_POST["email"] ?? "";
 
    // echo($email);

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");

    $n = $rs->num_rows;

    if ($n == 1) {

        $uid = uniqid();

        Database::iud("UPDATE `user` SET `verification_code`='" . $uid . "'
 WHERE `email` = '" . $email . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alecxenderkhdp@gmail.com';
        $mail->Password = 'kprirjgjkkharrbn';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($email, 'Admin forgot password Verification ');
        $mail->addReplyTo($email, 'Admin forgot password Verification');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Admin forgot password verification , Rajasinghe Central College.';
        $bodyContent = '    <div style="max-width:600px; margin:0 auto; padding:30px; background:#fff; border:1px solid #ddd; border-radius:8px; font-family:Arial,sans-serif;">
  <h1 style="color:#f7a043; font-size:24px; margin-bottom:20px; text-align:center;">
    Your Verification Code
  </h1>
  <p style="font-size:16px; color:#333; line-height:1.5;">
    Hello Admin,
    <br><br>
    Use the verification code below to complete your action.
  </p>
  <div style="text-align:center; margin:30px 0;">
    <span style="display:inline-block; background:#a30326; color:#fff; font-size:24px; padding:12px 24px; border-radius:4px; letter-spacing:2px;">
      <b>' . $uid . '</b>
    </span>
  </div>
  <p style="font-size:14px; color:#555;">
    If you did not request this, please ignore this email.
  </p>
  <p style="font-size:14px; color:#800000; margin-top:30px;">
    Thank you,<br>
    <strong>Rajasinghe Central College</strong>
  </p>
</div>';

        $mail->Body    = $bodyContent;

 
        if (!$mail->send()) {

            echo 'Verification code sending failed';
        } else {
            echo 'success';
        }
    } else {
        echo ("Invalid Email Address..!");
    }

}