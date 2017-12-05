<?php
// mail($toaddress, $subject, $mailcontent, $fromaddress);
require_once('class.phpmailer.php');
include('class.smtp.php');
$mail = new PHPMailer;

$mail->SMTPDebug = 2;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.163.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '18710051929@163.com';                 // SMTP username
$mail->Password = '80252797q';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;
 // TCP port to connect to

$mail->setFrom('18710051929@163.com', 'IDEMaker开源项目');
// $mail->addAddress('714080794@qq.com', 'Joe User');     // Add a recipient
$mail->addAddress('80252797@qq.com');               // Name is optional
$mail->addReplyTo('80252797@qq.com', 'Information');
// $mail->addCC('714034323@qq.com');
// $mail->addBCC('714034323@qq.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(false);                                  // Set email format to HTML

$mail->Subject = '18710051929-用户您好,订餐系统提醒您下单成功';
$mail->Body    = "18710051929-用户你好,您的订单已提交,请及时关注您的订餐时间,代我们发货人员发货";
$mail->AltBody = '18710051929-用户您好,订餐系统提醒您下单成功';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo ucwords('Message has been sent');
}