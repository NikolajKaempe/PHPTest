<?php

if(isset($_POST['username']) && isset($_POST['password']))
{

    $username = $_POST['username'];
    $password = $_POST['password'];

    try{

        //header('location: Home.php?username=' . $username);
        //$this->Login($username, $password);
        header('location: Login.php?error=Username or Password not set');

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

    include_once('User.php');
    include_once('Controller.php');

    try
    {
        $controller = new Controller();
        $currentUser = new User(null,$username,$password,null,null);

        foreach ($controller->getUsers() as $user)
        {
            if ($user['username'] == $currentUser->getUsername() && $user['password'] == $currentUser->getPassword())
            {
                header('location: Home.php?username=' . $username);
                break;
            }
        }
        throw new Exception("Invalid username or password");
    }
    catch (Exception $e)
    {
        throw $e;
    }
}