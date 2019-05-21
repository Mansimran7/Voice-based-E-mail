
<?php
   $mailto = $_POST['mail_to'];
    $mailSub = $_POST['sub'];
    $mailMsg = $_POST['mes'];

	require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "mansimransingh.anand2016@vitstudent.ac.in";
   $mail ->Password = "Hi@Vel17Msa_vit";
   $mail ->SetFrom("mansimransingh.anand2016@vitstudent.ac.in");
   $mail ->Subject = $mailSub; 
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }




?>

