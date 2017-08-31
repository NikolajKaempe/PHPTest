<?php

//include ('user.php');

if(isset($_POST['username']) && isset($_POST['password']))
{
    //$User-> new User(null,$_POST['username',$_POST['password'],null,null]

    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        Login($username, $password);
    }
    catch (Exception $e)
    {
        header('location: Login.php?error='. $e->getMessage() );
    }
}
else{
    header('location: Login.php?error=Username or Password not set');
}


function Login($username, $password)
{
    include('User.php');
    $currentUser = new User(null,$username,$password,null,null);
    foreach ($this->getUsers() as $user)
    {
        if ($user['username'] == $currentUser->getUsername() && $user['password'] == $currentUser->getPassword())
        {
            header('location: Home.php?username=' . $username);
        }
    }
    throw new Exception("Invalid username or password");
}