<?php

include("config.php");

session_start();

if(isset($_SESSION['id'])){
    require_once("headerloggedin.php");
}else{  
    require_once("header.php");
}


$productName = $price = "";


$data = mysql_query("SELECT * FROM products ORDER BY RAND ()");





?>
