<?php
// Initialize the session

	
session_start();
 

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //header("location: https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/store.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
		
#$_POST['login'];
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"&&($_POST['login'] == 'Customer Login'))
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)&&($_POST['login'] == 'Customer Login'))
	{
		
		// Prepare a select statement for customer
		$sql = "SELECT  CustomerID ,Email_Address, Password FROM Customer WHERE Email_Address = ?";

		
		
		
		
        if($stmt = mysqli_prepare($conn, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
			{
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1)
				{                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $CustomerID, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
					{
                        if(password_verify($password, $hashed_password))
						{
							 // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $CustomerID;
                            $_SESSION["username"] = $username;
							$_SESSION["isStaff"] = "0";
                            
							
							
                            // Redirect user to welcome page
                            header("location: https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/store.php");
						
                        } 
					else
					{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                    }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } 
			else
				{
					echo "Oops! Something went wrong. Please try again later.";
				}
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
if($_SERVER["REQUEST_METHOD"] == "POST"&&($_POST['login'] == 'Staff Login'))
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err))
	{

			// Prepare a select statement for staff
			$sql = "SELECT  StaffID , Email, Password FROM staff WHERE Email = ?";	

		
		
		
        if($stmt = mysqli_prepare($conn, $sql))
		{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt))
			{
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1)
				{                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $StaffID, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
					{
                        if(password_verify($password, $hashed_password))
						{
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $StaffID;
                            $_SESSION["username"] = $username;                            
                            $_SESSION["isStaff"] = "1";
							
							
							$positionData = mysqli_query($conn,"SELECT * FROM Staff WHERE StaffID = '$StaffID'");
							$position = mysqli_fetch_array($positionData);
							$position = $position['Position'];
							$position = trim($position);
							
							var_dump($position);
							
							if($position == "CEO")
							{
								header("location: https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOView.php");
							}
							elseif($position == "MANAGER")
							{
								
								header("location: https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorView.php");
								
							}
							else
							{
								// Redirect staff to staff page
								header("location: https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/staffPage.php");
							}
							
							
                        } 
					else
					{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                    }
                    }
                } 
				else
				{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } 
			else
			{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}

?>