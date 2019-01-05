<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Supervisor Product View</title>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- under here -->

<head>

 <div class="container">
  <h2>Supervisor Product View</h2>
  <div class="btn-group btn-group-justified">
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/Supervisorview.php" class="btn btn-primary">Supervisor Home</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RepairSupervisor.php" class="btn btn-primary">Repair Items</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/RentalSupervisor.php" class="btn btn-primary">Rental Items</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorProduct.php" class="btn btn-primary">Product List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/branchSupervisor.php" class="btn btn-primary">List of Branches</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/StaffView.php" class="btn btn-primary">Staff List</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/SupervisorCustomer.php" class="btn btn-primary">Customer List</a>
	

	
  </div>
</div>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
include("config.php");
#include("HeaderStaffLoggedIn.php");
    require_once("HeaderStaffLoggedIn.php");



include("config.php");
$result = mysqli_query($conn,"SELECT * FROM product where quantity > 0");
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
<br><br>
<div align="center">
<div class="container">
<font color="white"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button" style="background-color: #3478B2; border-color:#3478B2;">Add Product</button></font>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <form action="php scripts/insertProduct.php" method="post">
    <p>
	<div align="Left">
        <label for="Product_Name">Product Name:</label>
        <input type="text" name="Product_Name" id="Product_Name">
    </p>
    <p>
        <label for="Product_Type">Product Type:</label>
        <input type="text" name="Product_Type" id="Product_Type">
    </p>
	    <p>
        <label for="Price">Price:</label>
        <input type="text" name="Price" id="Price">
    </p>
	    <p>
        <label for="Make">Make:</label>
        <input type="text" name="Make" id="Make">
    </p>

	    <p>
        <label for="Quantity">Quantity:</label>
        <input type="text" name="Quantity" id="Quantity">
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


<br><br>

<div align="center">
<div class="container">
<font color="white"><button onclick="document.getElementById('id02').style.display='block'" class="w3-button" style="background-color: #3478B2; border-color: #3478B2;">Delete Product</button></font>
<div id="id02" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <form action="php scripts/removeProduct.php" method="post">
    <p>
        <label for="ProductID">Product ID: </label>
        <input type="text" name="ProductID" id="ProductID">
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
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Price</th>
				<th>Make</th>
				<th>Quantity</th>
				
				
            </tr>
        </thead>
        <tbody>
		<?php while($row = mysqli_fetch_array($result)):?>
		
            <tr>
                <!--<td><input type="checkbox" name=""></td>-->
                <td><?php echo $row['Product_Name'] ?></td>
                <td><?php echo $row['Product_Type'] ?></td>
                <td><?php echo $row['Price'] ?></td>
				<td><?php echo $row['Make'] ?></td>
				<td><?php echo $row['Quantity'] ?></td>			
            </tr>
		<?php endwhile; ?>
        </tbody>
        <tfoot>
            <tr>
                <!--<th></th>-->
                <th>Product Name</th>
                <th>Product Type</th>
                <th>Price</th>
				<th>Make</th>
				<th>Quantity</th>

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







