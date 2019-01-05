<?php

include("../config.php");
#include("php scripts/customerAcc.php");

// Escape user inputs for security
$Product_Name = mysqli_real_escape_string($conn, $_REQUEST['Product_Name']);
$Product_Type = mysqli_real_escape_string($conn, $_REQUEST['Product_Type']);
$Price = mysqli_real_escape_string($conn, $_REQUEST['Price']);
$Make = mysqli_real_escape_string($conn, $_REQUEST['Make']);
$Quantity = mysqli_real_escape_string($conn, $_REQUEST['Quantity']);

 
// Attempt insert query execution
$sql = "INSERT INTO Product (Product_Name, Product_Type, Price, Make, Quantity) VALUES ('$Product_Name', '$Product_Type', '$Price', '$Make','$Quantity')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?>