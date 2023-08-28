<?php
class EmailAddr {
    
    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function setEmail($email){
        $this->email = $email;
     }
     public function getEmail(){
        return $this->email;
     }
    
     public function isValid()
     {
        return (bool)filter_var($this->email, FILTER_VALIDATE_EMAIL);
     }

     public function getName() {
        return strstr($this->email, '@', true);
     }

     public function getDomain() {
        return strstr($this->email, '@');
     }

     public function getLastDomainPart()
     {
        return strrchr($this->email, '.');
     }
}

$email = new EmailAddr('name@example.com');
echo $email->isValid(); //1
echo "<br>";
echo $email->getEmail(); //name@example.com
echo "<br>";
echo $email->getName(); //name
echo "<br>";
echo $email->getDomain(); //@example.com
echo "<br>";
echo $email->getLastDomainPart(); //.com
echo "<br>";