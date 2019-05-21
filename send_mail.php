<?php
/*
	$mailto = $_POST['mail_to'];
	$mailSub = $_POST['sub'];
	$mailMsg = $_POST['mes'];


	require 'PHPMailer-master/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail -> IsSMTP();
	$mail -> SMTPDebug = 1;
	$mail -> SMTPAuth = true;
	$mail -> SMTPSecure = 'ssl';
	$mail -> Host = "smtp.gmail.com";
	$mail -> Port = 465;
	$mail -> IsHTML(true);
	$mail -> Username = "mansimransinghanand@gmail.com";
	$mail -> Password = "81_msa@Vel18";
	$mail -> SetFrom("mansimransinghanand@gmail.com");
	$mail -> Subject = $mailSub;
	$mail -> Body = $mailMsg;
	$mail -> AddAddress($mailto);


	if(!$mail -> Send())
	{
		echo "Mail not sent";
	}
	else
	{
		echo "Mail sent";
	}
	*/
?>



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



/*

   





    include("class.smtp.php"); 
    $emailField = $_POST['mai_to'];
    $messageField = $_POST['mes'];

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

$body .= $nameField;

try {
     //$mail->Host       = "mail.gmail.com"; // SMTP server
      $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
      $mail->SMTPAuth   = true;                  // enable SMTP authentication
      $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
      $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
      $mail->Port       = 465;   // set the SMTP port for the GMAIL server
      $mail->SMTPKeepAlive = true;
      $mail->Mailer = "smtp";
      $mail->Username   = "mansimran.8991@gmail.com";  // GMAIL username
      $mail->Password   = "Hi@Vel16Msa";            // GMAIL password
      $mail->AddAddress('sendto@gmail.com', 'abc');
      $mail->SetFrom('xxxxxx@gmail.com', 'def');
      $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
      $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
      $mail->MsgHTML($body);
      $mail->Send();
      echo "Message Sent OK</p>\n";
      header("location: ../test.html");
} catch (phpmailerException $e) {
      echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
      echo $e->getMessage(); //Boring error messages from anything else!
}

*/

?>

