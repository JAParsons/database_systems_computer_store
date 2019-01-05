<?php

include("../config.php");
#include("php scripts/customerAcc.php");

session_start();



// Escape user inputs for security

$Rental_Price = mysqli_real_escape_string($conn, $_REQUEST['Rental_Price']);
$Start_Date = mysqli_real_escape_string($conn, $_REQUEST['Start_Date']);
$End_Date = mysqli_real_escape_string($conn, $_REQUEST['End_Date']);
$CustomerID = mysqli_real_escape_string($conn, $_REQUEST['CustomerID']);





 
// Attempt insert query execution
$sql = "INSERT INTO Rental(Rental_Price, Start_Date, End_Date, CustomerID) VALUES ('$Rental_Price', '$Start_Date', '$End_Date', '$CustomerID')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?>