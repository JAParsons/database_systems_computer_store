<?php

// Include config file
#require_once "config.php";

// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/store.php");
exit;
?>
