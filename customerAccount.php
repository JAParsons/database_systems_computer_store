<!DOCTYPE html>
<html lang="en">

<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<?php

include("config.php");

$var = trim($_GET['staff']);
#var_dump($var);
$staff = "";

if($var == "1")
{
	include("php scripts/accountInfo.php");
	require_once("headerloggedin.php");
	$staff = "0";
	
}
else
{
	include("php scripts/accountInfoStaff.php");
	require_once("HeaderStaffLoggedIn.php");
	$staff = "1";
	}




$id = trim($_SESSION['id']);
$orderList = mysqli_query($conn,"SELECT * FROM orders WHERE CustomerID = '$id'");

?>

<br><br><br>
<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><h2 style = color:#ffffff ><?php echo $fullname ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7"><?php echo $fname; ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>

					<div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"><?php echo $lname; ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>

					<div class="col-sm-5 col-xs-6 tital " >Address:</div><div class="col-sm-7"><?php echo $address; ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>

					<div class="col-sm-5 col-xs-6 tital " >Postcode:</div><div class="col-sm-7"><?php echo $postcode ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>

					<div class="col-sm-5 col-xs-6 tital " >Contact_Number:</div><div class="col-sm-7"><?php echo $num ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>

					<div class="col-sm-5 col-xs-6 tital " >Email_Address:</div><div class="col-sm-7"><?php echo $email ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>

					<?php if($staff == "0"):?>
					
					<div class="col-sm-5 col-xs-6 tital " >Loyalty Points:</div><div class="col-sm-7"><?php echo $points ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>
		
		
					<?php endif; ?>
					
					<?php if($staff == "1"):?>
					
					<div class="col-sm-5 col-xs-6 tital " >Position:</div><div class="col-sm-7"><?php echo $position ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>
					
					<div class="col-sm-5 col-xs-6 tital " >Salary:</div><div class="col-sm-7"><?php echo $salary ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>
					
					<div class="col-sm-5 col-xs-6 tital " >Branch Number:</div><div class="col-sm-7"><?php echo $branchno ?></div>
					<div class="clearfix"></div>
					<div class="bot-border"></div>
					
					<?php endif; ?>
                    </tbody>
                  </table>
        
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                   
					<?php while($order = mysqli_fetch_array($orderList)):?>
						
						<div class="col-sm-5 col-xs-6 tital " >OrderID:</div><div class="col-sm-7"><?php echo $order['OrderID']; ?></div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>
						
						<div class="col-sm-5 col-xs-6 tital " >Total Cost:</div><div class="col-sm-7">£<?php echo $order['Total']; ?></div>
						<div class="clearfix"></div>
						<div class="bot-border"></div>						
					
					<?php endwhile; ?>	
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>