<?php

class Login_admin
{

    private $error = "";

    public function evaluate($data)
    {
        
		$mobile = addslashes($data['mobile']);
		$password = addslashes($data['password']);

		$query = "select * from admin where mobile = '$mobile' limit 1 ";

        $DB = new Database();
		$result = $DB->read($query);

        if($result)
        {
            $row = $result[0];
            //$password == $row['password']
            if($password==$row['password'])
            {
                $_SESSION['name'] = $row['name'];

            }else
            {
                $this->error .= "wrong password<br>";
            }

        }else
        {
            $this->error .= "No such mobile was found<br>";  
            
        }
        
        return $this->error;
    }
    public function check_login($id)
	{
		$query = "select admin_id from admin where admin_id = '$id' limit 1 ";

		
		$DB = new Database();
		$result = $DB->read($query);
		
		if($result)
		{

			return true;
		}

		return false;

	}
}
