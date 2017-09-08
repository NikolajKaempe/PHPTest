<?php
/**
 * Created by PhpStorm.
 * User: Markus
 * Date: 29-08-2017
 * Time: 12:55
 */

class Validation
{
    public function validateValue($value)
    {
        if (preg_match('/[^A-Za-z0-9]/', $value))
        {
            throw new Exception('IllegalCharacterException');
        }
    }

    public function isStringLenghtValid($min, $max, $value)
    {
        $count = strlen($value);
        if($count >= $min && $count <= $max)
        {
            return true;
        }
        else return false;
    }

    public function validateUsername($value)
    {
        try
        {
            $this->validateValue($value);
            if(!$this->isStringLenghtValid(3, 20, $value))
            {
                throw new Exception('IllegalUsernameLengthException');
            }
        }
        catch(Exception $exception)
        {
            throw $exception;
        }
    }

    public function validatePassword($value)
    {
        try
        {
            $this->validateValue($value);
            if(!$this->isStringLenghtValid(8, 30, $value))
            {
                throw new Exception('IllegalPasswordLengthException');
            }
            if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $value))
            {
                throw new Exception('WeakPasswordException');
            }
        }
        catch(Exception $exception)
        {
            throw $exception;
        }
    }
}