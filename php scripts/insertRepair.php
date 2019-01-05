<?php

include("../config.php");
#include("php scripts/customerAcc.php");

session_start();



// Escape user inputs for security
$Repair_Cost = mysqli_real_escape_string($conn, $_REQUEST['Repair_Cost']);
$Start_Date = mysqli_real_escape_string($conn, $_REQUEST['Start_Date']);
$End_date = mysqli_real_escape_string($conn, $_REQUEST['End_date']);
$repairDescription = mysqli_real_escape_string($conn, $_REQUEST['repairDescription']);

 
// Attempt insert query execution
$sql = "INSERT INTO repairs (Repair_Cost, Start_Date, End_date, RepairDescription) VALUES ('$Repair_Cost', '$Start_Date', '$End_date', '$repairDescription')";
if(mysqli_query($conn, $sql))
{
    echo "Records added successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//var_dump($Repair_Cost);
header('Location:https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/repairSupervisor.php'); 

// Close connection
mysqli_close($conn);

?>