<?php

include("../config.php");
#include("php scripts/customerAcc.php");


// Escape user inputs for security
$RepairID = mysqli_real_escape_string($conn, $_REQUEST['RepairID']);

 
// Attempt insert query execution
$sql = "DELETE FROM Repairs WHERE RepairID='$RepairID'";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

?>