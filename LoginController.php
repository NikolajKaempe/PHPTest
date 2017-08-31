<?php

//include ('user.php');

if(isset($_POST['username']) && isset($_POST['password']))
{
    //$User-> new User(null,$_POST['username',$_POST['password'],null,null]

    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        throw new Exception("Error message works !");
        header('location: Home.php?username=' . $username);
    }
    catch (Exception $e)
    {
        header('location: Login.php?error='. $e->getMessage() );
    }
}
else{
    header('location: Login.php?error=Username or Password not set');
}


