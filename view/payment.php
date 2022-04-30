
<?php
    include("../controller/connect.php");  
    
 	session_start();   
  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Burger Shop </title>
    <link rel="stylesheet" href="admin_signup.css">

    <a  href="user_logout.php">
           <span style= "font-size: 20px; float: right; margin: 20px; color: blue;">LOGOUT</span>
           </a>   
  </head>
  <body>
    <div class="center">
      <h1>PROCEDURE TO DELIVERY</h1>

      <form method="post">
      <div class="txt_field">         
          <?php
           
           echo "Name: ";
           echo $_SESSION['name'];           
          ?>
          <span></span>
          
        </div>
        <div class="txt_field">
         <?php
           
           echo "Mobile: ";
           echo $_SESSION['display'];           
          ?>
          <span></span>
          
        </div>
        <div class="txt_field">
           <?php

           echo "Total Amount:  $";
           echo $_SESSION['amounts'];

          ?>
          <span></span>
        </div>
        <div class="txt_field">
          <input name="Address" type="address" >
          <span></span>
          <label>PICK-UP LOCATION</label>
          <span></span>
        </div>        
        <div class="signup_link">
         Confirm Delivery <a href="pay.php">PROCEED</a>
        </div>        
        <div class="signup_link">
         DO YOU WANT TO MAKE ANY CHANGES <a href="index.php">DASHBOARD</a>
        </div>
      </form>
    </div>

  </body>

</html>
