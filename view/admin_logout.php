<?php 

session_start();

if(isset($_SESSION)){
    $_SESSION['name'] = NULL;   
    unset($_SESSION['name']);
    session_destroy();
}    

header("Location: login_admin.php");
die;