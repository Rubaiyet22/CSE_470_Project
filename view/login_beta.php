<?php
session_start();

include("../controller/connect.php");
include("../controller/login.php");

$mobile = "";
$password = "";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $login = new Login();
    $result = $login->evaluate($_POST);

    if($result != "")
    {

        echo "<div style='text-align:center; font-size: 12px;color:white;background-color:grey;'>";
        echo "<br>The following errors occured:<br><br>";
        echo $result;
        echo "</div>";	
    }else
    {
        header("Location: index.php");
        die;
    }

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
    

}

?>

<html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Burger Shop | Login </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input name="mobile" type="text" >
          <span></span>
          <label>Mobile</label>
        </div>
        <div class="txt_field">
          <input name="password" type="password" >
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup_beta.php">Signup</a>
        </div>
        <div class="signup_link">
          Are you an Admin? <a href="login_admin.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
