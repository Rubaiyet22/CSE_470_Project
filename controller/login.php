<?php

class Login
{

    private $error = "";

    public function evaluate($data)
    {
        
    $mobile = addslashes($data['mobile']);
    $password = addslashes($data['password']);

    $query = "select * from users where mobile = '$mobile' limit 1";

    $DB = new Database();
    $result = $DB->read($query);

        if($result)
        {
            $row = $result[0];

            if($password==$row['password'])
            {
                $_SESSION['name'] = $row['name'];
                $_SESSION['mobile'] = $row['mobile'];

            }else
            {
                $this->error .= "wrong password<br>";
            }

        }else
        {
            $this->error .= "No such email was found<br>";  
            
        }
        
        return $this->error;
    }
    public function check_login($id)
  {
    $query = "select user_id from users where user_id = '$id' limit 1 ";

    
    $DB = new Database();
    $result = $DB->read($query);
    
    if($result)
    {

      return true;
    }

    return false;

  }
}
