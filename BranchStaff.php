<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Branch Staff</title>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>

 <div class="container">
  <h2>Branch Staff</h2>
  <div class="btn-group btn-group-justified">
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffPage.php" class="btn btn-primary">Staff Home</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RepairStaff.php" class="btn btn-primary">Repair Items</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RentalStaff.php" class="btn btn-primary">Rental Items</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffProduct.php" class="btn btn-primary">Product List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/branchStaff.php" class="btn btn-primary">List of Branches</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/branchStaff.php" class="btn btn-primary">Customers</a>

	
  </div>
</div>


</head>


<?php
include("config.php");
#include("HeaderStaffLoggedIn.php");


//session_start();


    require_once("HeaderStaffLoggedIn.php");

include("config.php");
$result = mysqli_query($conn,"select * from Branch");
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




<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
	<div class="row">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <!--<th><input type="checkbox" onclick="checkAll(this)"></th>-->
                <th>Branch ID</th>
                <th>City</th>
                <th>Postcode</th>
				<th>Address</th>
				<th>Contact_Number</th>

            </tr>
        </thead>
        <tbody>
		<?php while($row = mysqli_fetch_array($result)):?>
		
            <tr>
                <!--<td><input type="checkbox" name=""></td>-->
						

                <td><?php echo $row['BranchID'] ?></td>
                <td><?php echo $row['City'] ?></td>
                <td><?php echo $row['Postcode'] ?></td>
				<td><?php echo $row['Address'] ?></td>
				<td><?php echo $row['Contact_Number'] ?></td>

            </tr>
		<?php endwhile; ?>
        </tbody>
        <tfoot>
            <tr>
                <!--<th></th>-->
                <th>Branch ID</th>
                <th>City</th>
                <th>Postcode</th>
				<th>Address</th>
				<th>Contact_Number</th>

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






