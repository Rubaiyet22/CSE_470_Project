<?php
  
  session_start();

  //Creating Connection with the database
  
  $conn = mysqli_connect('localhost', 'root', '', 'burgershop_db') or die("connection not established");
  
// Checking for connections
if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM bills ORDER BY ID ASC ";
$result = $conn->query($sql);
$conn->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<body style="background-color: lightblue;">   
<head>
    <meta charset="UTF-8">
     <a  href="admin_logout.php">
           <span style= "font-size: 20px; float: right; margin: 20px; color: blue;">LOGOUT</span>
           </a>

      <a>  <span style= "font-size: 20px; float: left; margin: 20px; color: blue;"><?php echo "ADMIN : ".$_SESSION['name']?></span>
           </a>    
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 5px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006666;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            background-color: #E4F5F5;
            border: 10px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
        <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
</head>
  
<body>
    <section>
        <h1>SALES</h1>
        
        <table>
            <tr>
                <th>DATE AND TIME</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>AMOUNT</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php 
              // LOOP TILL END OF DATA
                $total = 0; 
                while($rows=$result->fetch_assoc())
                {
                    
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Date_Time'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['mobile'];?></td>
                <td><?php echo $rows['amount'];?></td>
            </tr>
            <?php
                 $total = $total + $rows['amount'];
                }

             ?>
        </table>
    </section>
    <center>
        <table>
            <tr>
                <th>Total Sales</th>
                </tr>

                <tr>
                <td><?php echo $total; ?></td>
                </tr>
                </table>
                </center> 


    <center><p><a href=information.php><b>View all user</b></a></p></center>
    
</body>
  
</html>