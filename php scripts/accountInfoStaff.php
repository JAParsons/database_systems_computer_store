<?php

include("config.php");

session_start();

$temp = trim($_SESSION['id']);

$customerdata = mysqli_query($conn,"SELECT * FROM staff WHERE StaffID = '$temp'");
$staff = mysqli_fetch_array($customerdata);

$fname = $lname = $address = $postcode = $id = $dob = $num = $email = $salary = $branchno = $position = $fullname = '';

$fname = $staff['First_Name'];
$lname = $staff['Surname'];
$address = $staff['Address'];
$postcode = $staff['Postcode'];
$id = $staff['StaffID'];
$dob = $staff['Date_of_Birth'];
$num = $staff['Phone_Number'];
$email = $staff['Email'];
$position = $staff['Position'];
$salary = $staff['Salary'];
$branchno = $staff['BranchID'];
$fullname = $fname . " " . $lname;


?>