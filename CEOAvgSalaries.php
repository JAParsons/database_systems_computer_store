<!DOCTYPE html>
<html lang="en">



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
<!-- under here -->

<head>

 <div class="container">
  <h2>Justified Button Groups</h2>
  <div class="btn-group btn-group-justified">
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOView.php" class="btn btn-primary">Home</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEORental.php" class="btn btn-primary">Rental Sales</a>
    <a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOAvgSalaries.php" class="btn btn-primary">Average Salaries</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOBetweenSalaries.php" class="btn btn-primary">Salaries 20k-30k</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEORaise.php" class="btn btn-primary">Staff Rise</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOHighest.php" class="btn btn-primary">Highest Paid</a>
	<a href="https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/CEOSupplier.php" class="btn btn-primary">Suppliers</a>
	
	
	
  </div>
</div>

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
$result = mysqli_query($conn,"SELECT round( AVG(Salary),0)as AverageSalaries FROM Staff;");
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
                <th>Average Salary</th>

            </tr>
        </thead>
        <tbody>
		<?php while($row = mysqli_fetch_array($result)):?>
		
            <tr>
                <!--<td><input type="checkbox" name=""></td>-->
                <td><?php echo $row['AverageSalaries'] ?></td>

            </tr>
		<?php endwhile; ?>
        </tbody>
        <tfoot>
            <tr>
                <!--<th></th>-->
                <th>Average Salary</th>


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



