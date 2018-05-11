 <?php

   
  
    require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal
   
        
       $maila="letsbook27@gmail.com";
$mes='xbajt';
       $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->isHtml(true);
        $mail->Debugoutput = 'html';
        $mail->Host = gethostbyname("smtp.office365.com");
        $mail->SMTPDebug = 2; #include client and server messages
        $mail->Port = 587;
        #$mail->Port = 587; #change to ssl SMTPSecure
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "miguel.cachia.b42009@mcast.edu.mt";
        $mail->Password = "mcast4800";

        $mail->From = "miguel.cachia.b42009@mcast.edu.mt";
        $mail->AddAddress($maila); #later
        $mail->Subject = 'Your RoseClothing Password';
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