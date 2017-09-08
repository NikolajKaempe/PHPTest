<?php

if(isset($_POST['username']) && isset($_POST['password']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        Login($username, $password);

    }
    catch (Exception $e)
    {
        header('location: Login.php?error='. $e->getMessage());
    }
}
else{
    header('location: Login.php?error=Username or Password not set');
}


function Login($username, $password)
{
    include_once('User.php');

    try
    {
        $currentUser = new User(null,$username,$password,null,null);
        $currentUser->tryLoginUser($currentUser->getUsername(),$currentUser->getPassword());
    }
    catch (Exception $e)
    {
        throw $e;
    }
}