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
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
     }
}