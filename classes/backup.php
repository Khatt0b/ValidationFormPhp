<?php
class Validate
{
    private $name;
    private $email;
    private $phone;
    private $massege;
    public $error;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
      $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            $this->email = $email;
        } else {
            $this->error .= "//UnvalidEmail//";
            return false;
        }
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        if (!$this->validatePhone($phone) !== false) {
            $this->phone = $phone;
        } else {
            $this->error .= "//UnvalidPhone//";
            return false;
        }
    }
    public function setMassege($massege)
    {
        if (strlen($massege) > 10 && !empty($massege)) {
            $this->massege = $massege;
        } else {
            $this->error .= "//UnvalidMassege//";
            return false;
        }
    }
    public function getMassege()
    {
        return $this->massege;
    }

    private function validatePhone($phone)
    {
        if (preg_match('\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}', $phone,  $matches)) {
            return true;
        }
        return false;
    }
    public function errors(){
        return $this->error;
    }
    public function writeFile()
    {
        if (empty($this->error)) {
            $namef = fopen("name.txt", "w");
            $phonef = fopen("phone.txt", "w");
            $massegef = fopen("massege.txt", "w");
            $emailf = fopen("email.txt", "w");
            fwrite($namef, $this->name);
            fwrite($phonef, $this->phone);
            fwrite($massegef, $this->massege);
            fwrite($emailf, $this->email);
            return true;
        } else {
            $errorf = fopen("error.txt", "w");
            fwrite($errorf, $this->error);
            return false;
        }
    }
}
?>