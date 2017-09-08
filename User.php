<?php
/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 29-08-2017
 * Time: 12:20
 */

include_once('Validation.php');
include_once('Controller.php');

class User
{
    public static $lastID=0;
    private $id;
    private $username;
    private $password;
    private $lastLoginAttempt;
    private $failedLoginAttempts;

    public function __construct($id=null, $username, $password, $lastLoginAttempt=null, $failedLoginAttempts=null)
    {
        try
        {
            $Validation = new Validation();
            $Validation->validateUsername($username);
            $Validation->validatePassword($password);
        }
        catch(Exception $exception)
        {
            throw $exception;
        }

        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
        $this->lastLoginAttemp=$lastLoginAttempt;
        $this->failedLoginAttemps=$failedLoginAttempts;
    }



    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getLastLoginAttempt()
    {
        return $this->lastLoginAttempt;
    }

    /**
     * @param mixed $lastLoginAttempt
     */
    public function setLastLoginAttempt($lastLoginAttempt)
    {
        $this->lastLoginAttempt = $lastLoginAttempt;
    }

    /**
     * @return mixed
     */
    public function getFailedLoginAttempts()
    {
        return $this->failedLoginAttempts;
    }

    /**
     * @param mixed $failedLoginAttempts
     */
    public function setFailedLoginAttempts($failedLoginAttempts)
    {
        $this->failedLoginAttempts = $failedLoginAttempts;
    }

    public function tryLoginUser($username, $password)
    {
        try
        {
            $controller = new Controller();

            foreach ($controller->getUsers() as $user)
            {
                if ($user->getUsername() == $username && $user->getPassword() == $password)
                {
                    header('location: Home.php?username=' . $username);
                    exit;
                }
            }
            throw new Exception("Invalid username or password");
        }
        catch (Exception $e)
        {
            throw $e;
        }
    }
}