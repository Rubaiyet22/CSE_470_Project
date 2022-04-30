<?php

include("../controller/connect.php");

 
 function update($date,$naam,$mob,$tot){
 	$connect = mysqli_connect("localhost", "root", "", "burgershop_db");
 	$query = "insert into bills (Date_Time, name, mobile, amount) values ('$date','$naam','$mob','$tot') ";        
    $DB = new Database();
    $DB->save($query);
    increase();

   
 }

 function remove(){
 	$query = "delete from bills order by ID desc limit 1";
 	$DB = new Database();
    $DB->save($query);
    
    
 

 }

 function increase(){

 	$s= "SET  @num := 0";
 	$p= " UPDATE your_table SET id = @num := (@num+1)";
 	$query = "ALTER TABLE bills AUTO_INCREMENT=1";
 	$DB = new Database();
    $DB->save($query);


 }

?>