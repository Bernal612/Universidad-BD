<?php

include_once('DatabaseProces.php');
$user = $_POST['email'];
$pass = $_POST['password'];

$user = new DatabaseProcess();
$users->login($user,$pass);

$response = $users->login($user,$pass);

echo $response;

if($response === "verdarero"){
    header("Location: home.php");
}
else{
    echo '<script language = javascript">alert("Error En Datos");</script>';
}

?>