<?php

include("config.php");

session_start();

$temp = trim($_SESSION['id']);

$customerdata = mysqli_query($conn,"SELECT * FROM customer WHERE CustomerID = '$temp'");
$customer = mysqli_fetch_array($customerdata);

$fname = $lname = $address = $postcode = $id = $dob = $num = $email = $points = $fullname = '';
$fname = $customer['First_Name'];
$lname = $customer['Surname'];
$address = $customer['Address'];
$postcode = $customer['Postcode'];
$id = $customer['CustomerID'];
$dob = $customer['Date_of_Birth'];
$num = $customer['Contact_Number'];
$email = $customer['Email_Address'];
$points = $customer['Points'];
$fullname = $fname . " " . $lname;





?>