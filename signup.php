<?php
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
$msg = ""
if ($checkrows > 0) {
    $tmp = "account with given email already exists \r\n";
    $msg = $msg.$tmp;
    $valid = false;
} else {
    if(filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
   
}else{
    $valid = false;

    $tmp = "Invalid email given. \r\n";
    $msg = $msg.$tmp;
}

if(preg_match("/^([a-zA-Z' ]+)$/",$full_name)){
    
}else{
    $valid = false;
    $tmp = "Invalid name given. \r\n";
    $msg = $msg.$tmp;
}

if (preg_match('#[0-9]{5}#', $zipcode)){
    
}else{
    $valid = false;
    $tmp = "Invalid zip code given.\r\n";
    $msg = $msg.$tmp;
}

if(preg_match("/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/",$city)){
    
}else{
    $valid = false;
    $tmp =  "Invalid city given. \r\n";
    $msg = $msg.$tmp;
}


if ($valid){
    $query = "INSERT INTO public.sitecustomers VALUES ('$full_name', '$email_address', '$street_address', '$city', '$state', '$zipcode', '$hashed_password')";
    $result = pg_query($db_connection, $query);
    header('Location: index.html');
}else {
    function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    phpAlert($msg);
    sleep(5);
    header('Location: signup.html');
}

}

?>