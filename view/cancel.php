<?php 

	require_once('../controller/order.php');
    session_start();  
 		
 	remove(); 
 	increase();	
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Burger Shop </title>
    <link rel="stylesheet" href="admin_signup.css">

    <a  href="user_logout.php">
           <span style= "font-size: 20px; float: right; margin: 20px; color: blue;">LOGOUT</span>
           </a>
    <a  href="index.php">
           <span style= "font-size: 20px; float: left; margin: 20px; color: red;">DASHBOARD</span>
           </a>           
  </head>
  <body>
    <div class="center">
      <h1>YOUR ORDER IS CANCELLED</h1>
      
    </div>

  </body>

</html>