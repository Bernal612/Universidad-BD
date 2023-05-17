<?php

include_once('DatabaseProces.php');

if(isset($_POST['submit'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $users = new DatabaseProcess();
    $users->login($user,$pass);

    $response = $users->login($user,$pass);
    
    if($response == "Verdadero"){
        header("Location: ../pages/home/home.php"); 
    }
    else{
        echo '<script language = javascript">alert("Error En Datos");</script>';
    }
}
?>