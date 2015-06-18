<?php
/**
 * Created by PhpStorm.
 * User: unevmerzhuzkiy
 * Date: 6/10/15
 * Time: 6:58 PM
 */


function validateLogin($login)
{
    $loginPattern = '/^[\w]{2,20}$/';
    if(!preg_match($loginPattern, $login))
    {
        return false;
    }
    else
        return true;
}

function validatePassword($password)
{
    $passwordPattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{4,20}$/';
    if(preg_match($passwordPattern,$password)!=1)
    {
        return false;
    }
    else
        return true;
}

function validateEmail($email)
{
    return filter_var($email,FILTER_VALIDATE_EMAIL);
}