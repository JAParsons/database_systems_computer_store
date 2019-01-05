<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Store Home</title>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>

 <div class="container">
  <h2>Justified Button Groups</h2>
  <div class="btn-group btn-group-justified">
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffPage.php" class="btn btn-primary">Staff Home</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RepairStaff.php" class="btn btn-primary">Repair Items</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RentalStaff.php" class="btn btn-primary">Rental Items</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffProduct.php" class="btn btn-primary">Product List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/branchStaff.php" class="btn btn-primary">List of Branches</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/staffCustomer.php" class="btn btn-primary">Customers</a>

	
  </div>
</div>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>


<?php
include("config.php");
#include("HeaderStaffLoggedIn.php");


//session_start();

if(isset($_SESSION['id'])){
    require_once("HeaderStaffLoggedIn.php");
}else{  
    require_once("header.php");
}

include("config.php");
$result = mysqli_query($conn,"select * from RepairView");
?>

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


</style>

<br>
<div align="center">
<div class="container">
<font color="white"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color: #3478B2; border-color:#3478B2;">Add Repair</button></font>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <form action="php scripts/insertRepair.php" method="post">
    <p>
	<div align="Left">
        <label for="Repair_Cost">Repair Cost:</label>
        <input type="text" name="Repair_Cost" id="Repair_Cost">
    </p>
    <p>
        <label for="Start_Date">Start Date (year-month-day):</label>
        <input type="text" name="Start_Date" id="Start_Date">
    </p>
	    <p>
        <label for="End_date">End Date (year-month-day):</label>
        <input type="text" name="End_date" id="End_date">
    </p>
	    <p>
        <label for="repairDescription">Repair Description:</label>
        <input type="text" name="repairDescription" id="repairDescription">
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




<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <!--<th><input type="checkbox" onclick="checkAll(this)"></th>-->
                <th>Repair ID</th>
                <th>First Name</th>
                <th>Surname</th>
				<th>Repair Cost</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Repair Description</th>
            </tr>
        </thead>
        <tbody>
		<?php while($row = mysqli_fetch_array($result)):?>
		
            <tr>
                <!--<td><input type="checkbox" name=""></td>-->
						
			
			
			
                <td><?php echo $row['RepairID'] ?></td>
                <td><?php echo $row['First_Name'] ?></td>
                <td><?php echo $row['surname'] ?></td>
				<td><?php echo $row['Repair_Cost'] ?></td>
				<td><?php echo $row['Start_Date'] ?></td>
				<td><?php echo $row['End_date'] ?></td>
				<td><?php echo $row['RepairDescription'] ?></td>
				
            </tr>
		<?php endwhile; ?>
        </tbody>
        <tfoot>
            <tr>
                <!--<th></th>-->
                <th>Repair ID</th>
                <th>First Name</th>
                <th>Surname</th>
				<th>Repair Cost</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Repair Description</th>

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





