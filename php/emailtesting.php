 <?php

   
  
    require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal
   
        
       $maila="letsbook27@gmail.com";
$mes='xbajt';
       $mail = new PHPMailer();
$mail->mail->SMTPOptions = array(
            'tls' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->isHtml(true);
        $mail->Debugoutput = 'html';
        $mail->Host = gethostbyname("smtp.Gmail.com");
        $mail->SMTPDebug = 2; #include client and server messages
        $mail->Port = 587;
        #$mail->Port = 587; #change to ssl SMTPSecure
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "letsbook27@gmail.com";
        $mail->Password = "Letsbook.123";

        $mail->From = "letsbook27@gmail.com";
        $mail->AddAddress($maila); #later
        $mail->Subject = 'tickets';
        $mail->Body =  $mes;
        #$mail->WordWrap = 50;

        if(!$mail->Send()) {
           $message = "Error Occured ! Email Was Not Sent !";
           echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message2 = "Your Password Has Been Sent To The Given Address !";
           echo "<script type='text/javascript'>alert('$message2');</script>";
            header("location: RoseClothing.html");
        }	

           
 
      

    
?>