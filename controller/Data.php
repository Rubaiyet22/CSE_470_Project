<?php
  
  session_start();

  //Creating Connection with the database
  function billing(){

  	$conn = mysqli_connect('localhost', 'root', '', 'burgershop_db') or die("connection not established");
  

if ($conn->connect_error) {
    die('Connect Error (' . 
    $conn->connect_errno . ') '. 
    $conn->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM bills ORDER BY ID ASC ";
$result = $conn->query($sql);
$conn->close(); 

  }
  
?>