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

<title>CEO Main Menu</title>

<div id="services" class="container-fluid text-center">
  <h2>CEO View</h2>
  <h4>Click below to navigate</h4>
  <br>
 
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-play logo-small"></span>
	  <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEORental.php">
      <h4>Total Rental Sales</h4>
      <p>Click to see the total amount made from Rentals</p>
	  </a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gbp logo-small"> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOAvgSalaries.php"></span>
      <h4>Average Spending on salaries</h4>
      <p>Click to view a list of rentals</p>
	  </a>
	  
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOBetweenSalaries.php">
      <h4>List staff members with certain salaries</h4>
      <p>Click to List all staff members with salaries between 20000 and 30000</p>
	  </a>
    </div>
	<br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br>
	 <div class="col-sm-4">
      <span class="glyphicon glyphicon-arrow-up logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEORaise.php">
      <h4>Raise View</h4>
      <p>See how much salaries would rise with a certain percentage raise</p>
	  </a>
    </div>
	
	 <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOHighest.php">
      <h4>Highest Paid</h4>
      <p>Click to see a list of the highest paid employees</p>
	  </a>
    </div>
	
		 <div class="col-sm-4">
      <span class="glyphicon glyphicon-pushpin logo-small"></span> <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOSupplier.php">
      <h4>Supplier Information</h4>
      <p>Click to see a list of all of the suppliers</p>
	  </a>
    </div>

  <br><br>
  </div>
</div>
 
 <br>


</body>
</html>