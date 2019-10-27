<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */

require(__DIR__ . '\Exception.php');
/* The main PHPMailer class. */
require(__DIR__ . '\PHPMailer.php');
/* SMTP class, needed if you want to use SMTP. */
require(__DIR__ . '\SMTP.php');
$Name = $_POST['name'];
$Email = $_POST['email'];
$Message = $_POST['body'];

$mail = new PHPMailer(TRUE);
try {
   /* Set the mail sender. */
   $mail->setFrom($Email, $Name);

   /* Add a recipient. */
   $mail->addAddress('StartBox.2020@gmail.com', 'Your Highness');

   /* Set the subject. */
   $mail->Subject = 'Customer Inquiry';

   /* Set the mail message body. */
   $mail->Body = $Message;

   /* Finally send the mail. */
   $mail->send();

}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
 header('Location: index.html');
?>