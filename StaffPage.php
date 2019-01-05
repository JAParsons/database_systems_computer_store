<html lang="en">
<head>
<link rel="icon" href="assets/dragon.png">
</head>

<?php
require_once("config.php");
#include ('header.php');


session_start();

    require_once("HeaderStaffLoggedIn.php");

 


?>



<div id="services" class="container-fluid text-center">
  <h2>Staff View</h2>
  <h4>Click below to navigate</h4>
  <br>
 
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-registration-mark logo-small"></span>
	  <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/repairStaff.php">
      <h4>Repair View</h4>
      <p>Click to see a list of repairs that are currently happening and ones that have been completed</p>
	  </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RentalStaff.php"></span>
      <h4>Rental</h4>
      <p>Click to view a list of rentals</p>
	  </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-home logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/branchStaff.php">
      <h4>Branch View</h4>
      <p>Click to see a list of branches and their contact information</p>
	  </a>
    </div>
	
  <br><br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>
  
  <div class="col-sm-2">
    </div>
  <div class="row">
      <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/staffCustomer.php">
      <h4>Customer View</h4>
      <p>Click to see customer information</p>
	  </a>
    </div>
  
  
      <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffProduct.php">
      <h4>Product View</h4>
      <p>Click to see a list of items that are owned by the company</p>
	  </a>
    </div>
  </div>
</div>
 
 <br>


</body>
</html>