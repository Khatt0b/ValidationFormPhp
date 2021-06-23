<?php
require_once("User.php");
class Validator
{
    public function __construct()   
    {
        session_start();
        $_SESSION['errors'] = "";
    }
    static function validateUser($name,$email,$phone,$message) {
        
        if( Validator::validateEmail($email) && Validator::validateMassege($message) && Validator::validatePhone($phone) && Validator::validateName($name)){
          return true;
        }
        return false;
    }

    static function validateName($name)
    {
        if (!empty($name)) {
            return true;
        } else {
            $_SESSION['errors'].="nameerror";
            return false;
        }
    }
    static function validateEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            return true;
        } else {
            $_SESSION['errors'].="emailerror";
            return false;
        }
    }
    static function validatePhone($phone)
    {
        if (Validator::isValidPhone($phone) !== false) {
            return true;
        } else {
            $_SESSION['errors'].="phoneerror";
            return false;
        }
    }
    static function validateMassege($message)
    {
        if (strlen($message) > 10 && !empty($message)) {
            return true;
        } else {
            $_SESSION['errors'].="messageerror";
            return false;
        }
    }

    static function isValidPhone($phone)
    {
        if(preg_match("/^[0-9]{3}-?[0-9]{4}-?[0-9]{3}$/", $phone)) {
            return true;
          }
        return false;
    }
    
}
