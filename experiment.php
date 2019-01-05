<head>

<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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


</style>


<?php
include("config.php");
#include("header.php");


session_start();

if(isset($_SESSION['id'])){
    require_once("headerloggedin.php");
}else{  
    require_once("header.php");
}

include("config.php");
$result = mysqli_query($conn,"SELECT * FROM Branch");
?>
<div class="container">
  <h2>Justified Button Groups</h2>
  <div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-primary">Apple</a>
    <a href="#" class="btn btn-primary">Samsung</a>
    <a href="#" class="btn btn-primary">Sony</a>
	<a href="#" class="btn btn-primary">BACK</a>
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
                <th>Branch ID <span class="glyphicon glyphicon-sort"></span></th>
                <th>City  <span class="glyphicon glyphicon-sort"></span></th>
                <th>Postcode  <span class="glyphicon glyphicon-sort"></span></th>
                <th>Address  <span class="glyphicon glyphicon-sort"></span></th>
                <th>Contact Number  <span class="glyphicon glyphicon-sort"></span></th>
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
                <th>Contact Number</th>
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