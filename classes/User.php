<?php
class User
{
    private $name;
    private $email;
    private $phone;
    private $message;
    
    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

     public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
         $this->email = $email;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function setMassege($message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function flushUser()
    {
        $file =fopen("/var/www/html/users.txt",'a');
        fwrite($file,'{'.$this->toString().'}'."\n");
    }
    public function toString(){
        return "$this->name,$this->email,$this->phone,$this->message";
    }
}