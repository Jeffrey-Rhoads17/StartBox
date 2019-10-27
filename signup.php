<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require(__DIR__ . '\Exception.php');
/* The main PHPMailer class. */
require(__DIR__ . '\PHPMailer.php');
/* SMTP class, needed if you want to use SMTP. */
require(__DIR__ . '\SMTP.php');

$db_connection = pg_connect("host=ec2-54-235-92-244.compute-1.amazonaws.com port=5432 dbname=d8ml5c7u4acibm user=jzyjvbcryijgfg password=01a082153a927515cb3d2724ec7a13ee0a2491042a18a45940a8ae7a5dc74b52");

$full_name = $_POST['name'];
$email_address = $_POST['email'];
$street_address = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zip'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$check=pg_query($db_connection,"select * from sitecustomers where email_address='$email_address'");
$checkrows = pg_num_rows($check);
$valid = true;

if ($checkrows > 0) {
    $tmp = "account with given email already exists \r\n";
    
    $valid = false;
}

if ($valid){
    $query = "INSERT INTO public.sitecustomers VALUES ('$full_name', '$email_address', '$street_address', '$city', '$state', '$zipcode', '$hashed_password')";
    $result = pg_query($db_connection, $query);
     $mail = new PHPMailer(true);
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "startbox.2020@gmail.com";
        $mail->Password = "bums1234";
        $mail->SetFrom("startbox.2020@gmail.com");
        $mail->Subject = "StartBox sign up confirmation";
        $mail->Body = "Hi $full_name thank you for signing up!  We can't wait for you to order your first Box!";
        $mail->AddAddress("$email_address");
        $mail->Send();
   
    header('Location: index.html');
}else {
    header('Location: login2.html');
}



?>