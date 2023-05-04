<?php

include_once('DatabaseProcess.php');

if(isset($_POST['submit'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $users = new DatabaseProcess();
    $users->login($user,$pass);

    $response = $users->login($user,$pass);

    echo $response;
    
    if($response === "verdarero"){
        header("Location: ../home.php");
    }
    else{
        echo '<script language = javascript">alert("Error En Datos");</script>';
    }
}
?>