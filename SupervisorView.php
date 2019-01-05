<html lang="en">
<head>
<link rel="icon" href="assets/dragon.png">
</head>

<?php
require_once("config.php");
#include ('header.php');


session_start();

if(isset($_SESSION['id'])){
    require_once("HeaderStaffLoggedIn.php");
}else{  
    require_once("header.php");
}



?>
<title>Supervisor Home Page</title>
 
 <br>

 <div id="services" class="container-fluid text-center">
  <h2>Supervisor Home</h2>
  

  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-registration-mark logo-small"></span>
	  <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/repairSupervisor.php">
      <h4>Repair View</h4>
      <p>Click to see a list of repairs that are currently happening and ones that have been completed</p>
	  </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RentalSupervisor.php"></span>
      <h4>Rental</h4>
      <p>Click to view a list of rentals</p>
	  </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-home logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/branchSupervisor.php">
      <h4>Branch View</h4>
      <p>Click to see a list of branches and their contact information</p>
	  </a>
    </div>
  </div>
  <br><br><br>
  <br><br><br>
 <br><br><br>
  
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorProduct.php">
      <h4>Product View</h4>
      <p>Click to see a list of items that are owned by the company</p>
	  </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-thumbs-up logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffView.php">
      <h4>Staff View</h4>
      <p>Click to see staff information</p>
	  </a>
    </div>
	    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorCustomer.php">
      <h4>Customer View</h4>
      <p>Click to see Customer information</p>
	  </a>
    </div>


    </div>
  </div>
</div>

</body>
</html>