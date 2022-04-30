<?php
namespace app;
class User{
    public $user_mobile;
    public $user_pass;
    public $user_name;
    public $user_address;

    public function signUp($mob,$pass,$naam,$add){
         
         $this->user_mobile = $mob;
         $this->user_pass = $pass;
         $this->user_name=$naam;
         $this->user_address=$add;
         
     }

     public function login($mob,$pass)
     {
         if ($this->user_mobile==$mob and $this->user_pass==$pass)
         {
             return True;
         }
         else{
             return False;
         }
     }
}

?>