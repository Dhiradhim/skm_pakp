<?php
session_start(); 
$tahun = $_SESSION['tahun'];
if(!$_SESSION['username'])
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
} 
?>