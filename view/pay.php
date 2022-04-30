<?php 

	require_once('../controller/order.php');
    session_start();   	
 	$date = date('Y-m-d H:i:s');
 	$naam = $_SESSION['name'];
 	$mob = $_SESSION['display'];
 	$tot = $_SESSION['amounts'];
 	update($date,$naam,$mob,$tot); 	
?>
<html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <a  href="user_logout.php">
           <span style= "font-size: 20px; float: right; margin: 20px; color: red;">LOGOUT</span>
           </a>

    <a  href="index.php">
           <span style= "font-size: 20px; float: left; margin: 20px; color: red;">DASHBOARD</span>
           </a> 
    <a  href="cancel.php">
           <span style= "font-size: 20px; float: left; margin: 20px; color: red;">CANCEL ORDER</span>
           </a>                        
    <title>PREPARING FOOD</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
  
        body {
            background: yellowgreen;
        }
  
        .container {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
  
        .container span {
            display: block;
        }
  
        .text1 {
            color: red;
            font-size: 70px;
            font-weight: 700;
            letter-spacing: 8px;
            margin-bottom: 20px;
            background: yellowgreen;
            position: relative;
            animation: text 5s 2;
            animation-iteration-count: 1000;
        }
  
        .text2 {
            font-size: 30px;
            color: darkgreen;
            font-family: Georgia, serif;
        }
  
        @keyframes text {
            0% {
                color: black;
                margin-bottom: -40px;
            }
  
            30% {
                letter-spacing: 25px;
                margin-bottom: -40px;
            }
  
            85% {
                letter-spacing: 8px;
                margin-bottom: -40px;
            }
        }
    </style>
</head>
  
<body>
    <div class="container">
        <div class="row">
            <span class="text1">Preparing The Food</span>
            <span class="text2">Around 30 Minutes Needed</span>
        </div>
        
    </div>
</body>
  
</html>