<?php
echo getcwd();
require('phpmailer\PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTDebug ='2';
$mail->SMTPAuth = true;
$mail->SMTPSecure ='tls';
$mail->Host ='smtp.gmail.com';
$mail->Port='565';
$mail->isHTML(true);
$mail->From ="letsbok";
$mail->Username='letsbook27@gmail.com';
$mail->Password='Letsbook.123';
$mail->setFrom('letsbook27@gmail.com');
$mail->Subject = 'tickets';
$mail->Body='hello libus hiii';
$mail->AddAddress('letsbook27@gmail.com');
if($mail->send()){echo "good";}
else{echo"nno";}




?>