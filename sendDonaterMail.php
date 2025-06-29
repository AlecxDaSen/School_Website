<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST["email"])) {

    $fname = $_POST["fname"] ?? "";
    $lname = $_POST["lname"] ?? "";
    $email = $_POST["email"] ?? "";
    $mobile = $_POST["mobile"] ?? "";
    $amount = $_POST["amount"] ?? "";
    $msg = $_POST["msg"] ?? "";

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
        $mail->setFrom($email, 'Donation Confirmation');
        $mail->addReplyTo($email, 'Donation Confirmation');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Donation Conformation Rajasinghe Central College .';
        $bodyContent = '<div style="max-width:600px; margin:0 auto; padding:0; background:#ffffff; border:1px solid #ddd; border-radius:8px; font-family:Arial,sans-serif; overflow:hidden;">

  <div style="padding:30px;">
    <h1 style="color:#f7a043; font-size:24px; margin-bottom:20px; text-align:center;">
      Donation Confirmation
    </h1>

    <p style="font-size:16px; color:#333; line-height:1.5;">
      Dear Donor,
      <br><br>
      Thank you for your generous donation! Here are the details of your contribution:
    </p>

    <table style="width:100%; margin:20px 0; border-collapse:collapse;">
      <tr>
        <td style="padding:8px; font-weight:bold; color:#555;">Name:</td>
        <td style="padding:8px; color:#333;">' . htmlspecialchars($fname . " " . $lname) . '</td>
      </tr>
      <tr style="background:#f9f9f9;">
        <td style="padding:8px; font-weight:bold; color:#555;">Email:</td>
        <td style="padding:8px; color:#333;">' . htmlspecialchars($email) . '</td>
      </tr>
      <tr>
        <td style="padding:8px; font-weight:bold; color:#555;">Mobile:</td>
        <td style="padding:8px; color:#333;">' . htmlspecialchars($mobile) . '</td>
      </tr>
      <tr style="background:#f9f9f9;">
        <td style="padding:8px; font-weight:bold; color:#555;">Amount:</td>
        <td style="padding:8px; color:#333;">LKR ' . htmlspecialchars(number_format($amount, 2)) . '</td>
      </tr>
      <tr>
        <td style="padding:8px; font-weight:bold; color:#555;">Message:</td>
        <td style="padding:8px; color:#333;">' . nl2br(htmlspecialchars($msg)) . '</td>
      </tr>
    </table>

    <p style="font-size:16px; color:#333; line-height:1.5;">
      Your support helps us continue our mission and make a difference.
    </p>

    <p style="font-size:14px; color:#4CAF50; margin-top:30px;">
      With gratitude,<br>
      <strong>Rajasinghe Central College</strong>
    </p>
  </div>
</div>';

        $mail->Body    = $bodyContent;


        $name = $fname . " " . $lname;

        $dateOBJ = new DateTime();

        $date = $dateOBJ->format("y-m-d");

        Database::iud("INSERT INTO `donations` (`name`,`email`,`mobile`,`amount`,`message`,`date`)
    VALUES ('" . $name . "','" . $email . "','" . $mobile . "','" . $amount . "','" . $msg . "','" . $date . "')");


        if (!$mail->send()) {

            echo 'Verification code sending failed';
        } else {
            echo 'success';
        }
    } else {
        echo ("Invalid Email Address..!");
    }
}
