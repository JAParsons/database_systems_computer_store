
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Staff View - Supervisor</title>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>

 <div class="container">
  <h2>Supervisor View</h2>
  <div class="btn-group btn-group-justified">
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/Supervisorview.php" class="btn btn-primary">Supervisor Home</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RepairSupervisor.php" class="btn btn-primary" >Repair Items</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RentalSupervisor.php" class="btn btn-primary">Rental Items</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorProduct.php" class="btn btn-primary">Product List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/BranchSupervisor.php" class="btn btn-primary">Branch List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffView.php" class="btn btn-primary">Staff List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorCustomer.php" class="btn btn-primary">Customer List</a>
  </div>
</div>

</head>

<style>

table{
    width:100%;
}
#example_filter{
    float:right;
}
#example_paginate{
    float:right;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;
   
}

.container {
  width: 600px;
  length: 1000px;
  clear: both;
}

.container input {
  width: 100%;
  length: 120%;
  clear: both;
}
</style>

<!-- Inserts a modal that allows the user to add an employee -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include("config.php");
#include("HeaderStaffLoggedIn.php");





    require_once("HeaderStaffLoggedIn.php");


include("config.php");
$result = mysqli_query($conn,"select * from Staff");
?>

<body>
<br>
<div align="center">
<div class="container">
<font color="white"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color: #3478B2; border-color:#3478B2;">Add Employee</button></font>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <form action="php scripts/insertStaff.php" method="post">
    <p>
	<div align="Left">
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
	    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
	    <p>
        <label for="postcode">Postcode:</label>
        <input type="text" name="postcode" id="postcode">
    </p>
	    <p>
        <label for="position">Position:</label>
        <input type="text" name="position" id="position">
    </p>
	    <p>
        <label for="salary">Salary:</label>
        <input name="salary" id="salary">
    </p>
		    <p>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" name="phone_number" id="phoneNumber">
    </p>
	
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
	</div>
    <input type="submit" value="Submit">
	
	
	
	
</form>
    </div>
  </div>
</div>
</div>
</div>
</div>

<br>


<!-- Deletes staff members from the table -->
<div align="center">
<div class="container">
<font color="white"><button onclick="document.getElementById('id02').style.display='block'" class="w3-button" style="background-color: #3478B2; border-color: #3478B2;">Delete Employee</button></font>

<div id="id02" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <form action="php scripts/removeStaff.php" method="post">
    <p>
        <label for="StaffID">Staff ID: </label>
        <input type="text" name="StaffID" id="StaffID">
    </p>
    <p>

    </p>
    <input type="submit" value="Submit">
	
</form>
    </div>
  </div>
</div>
  </div>
</div>



<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <!--<th><input type="checkbox" onclick="checkAll(this)"></th>-->
<th>First Name</th>
<th>Surname</th>
<th>Address</th>
<th>Postcode</th>
<th>Phone Number</th>
<th>Position</th>
<th>Email</th>

				
				
            </tr>
        </thead>
        <tbody>
		<?php while($row = mysqli_fetch_array($result)):?>
		
            <tr>
                <!--<td><input type="checkbox" name=""></td>-->
                <td><?php echo $row['First_Name'] ?></td>
                <td><?php echo $row['Surname'] ?></td>
				<td><?php echo $row['Address'] ?></td>
                <td><?php echo $row['Postcode'] ?></td>
				<td><?php echo $row['Phone_Number'] ?></td>
				<td><?php echo $row['Position'] ?></td>
				<td><?php echo $row['Email'] ?></td>
				
            </tr>
		<?php endwhile; ?>
        </tbody>
        <tfoot>
            <tr>
                <!--<th></th>-->
<th>First Name</th>
<th>Surname</th>
<th>Address</th>
<th>Postcode</th>
<th>Phone Number</th>
<th>Position</th>
<th>Email</th>
            </tr>
        </tfoot>
    </table>
	</div>
</div>


<script>
$(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[10, 20, 30, -1], [10, 20, 30, "All"]],
        "iDisplayLength": 10
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}

</script>






