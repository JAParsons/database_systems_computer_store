<?php

include("../config.php");
#include("php scripts/customerAcc.php");

session_start();



// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$postcode = mysqli_real_escape_string($conn, $_REQUEST['postcode']);
$position = mysqli_real_escape_string($conn, $_REQUEST['position']);
$salary = mysqli_real_escape_string($conn, $_REQUEST['salary']);
$phone_number = mysqli_real_escape_string($conn, $_REQUEST['phone_number']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO Staff (First_Name, Surname, Address, Postcode, Position, Salary, Phone_Number, Email) VALUES ('$first_name', '$last_name', '$address', '$postcode','$position', '$salary','$phone_number', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?>