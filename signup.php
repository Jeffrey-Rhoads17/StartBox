<?php
$db_connection = pg_connect("host=ec2-54-235-92-244.compute-1.amazonaws.com port=5432 dbname=d8ml5c7u4acibm user=jzyjvbcryijgfg password=01a082153a927515cb3d2724ec7a13ee0a2491042a18a45940a8ae7a5dc74b52");

$full_name = $_POST['name'];
$email_address = $_POST['email'];
$street_address = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zip'];
$password = $_POST['pass'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$check=pg_query($db_connection,"select * from sitecustomers where email_address='$email_address'");
$checkrows = pg_num_rows($check);
$valid = true;
if ($checkrows > 0) {
    echo "account with given email already exists";

} else {
    if(filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
    echo 'Valid email given.';
}else{
    $valid = false;
    echo 'Invalid email given.';
}

if(preg_match("/^([a-zA-Z' ]+)$/",$full_name)){
    echo 'Valid name given.';
}else{
    $valid = false;
    echo 'Invalid name given.';
}

if (preg_match('#[0-9]{5}#', $zipcode)){
    echo 'Valid zip code given.';
}else{
    $valid = false;
    echo 'Invalid zip code given.';
}

if(preg_match("/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/",$city)){
    echo 'Valid city given.';
}else{
    $valid = false;
    echo 'Invalid city given.';
}

if(preg_match("/^[A-Za-z0-9\-\\,.]+$/",$street_address)) {
    echo 'Valid street given.';
}else{
    $valid = false;
    echo 'Invalid street given.';
}


if ($valid){
    $query = "INSERT INTO public.sitecustomers VALUES ('$full_name', '$email_address', '$street_address', '$city', '$state', '$zipcode', '$hashed_password')";
    $result = pg_query($db_connection, $query);
    header('Location: index.html');
}

}


?>