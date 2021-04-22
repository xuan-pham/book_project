<?php
include_once "mail/PHPMailer.php";
include_once "mail/SMTP.php";
include_once "mail/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "pham.xuan.duc.23.09.2019@gmail.com";
$mail->Password = "Pham_xuan_duc_22021998@gmail.com";
$mail->Subject = "Đơn hàng từ Eshop";
$mail->setFrom("pham.xuan.duc.23.09.2019@gmail.com");
$mail->Body = "PCP ne";
$mail->addAddress("pham.xuan.duc.23.09.2019@gmail.com");

if ($mail->Send()) {
    echo "Email sent..";
} else {
    echo "Failed";
}
$mail->smtpClose();
