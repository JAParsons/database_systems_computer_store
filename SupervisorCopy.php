<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Store Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

	<link href="stylesheet.css" rel="stylesheet" type="text/css">
	<link href="css/table.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<br><br><br><br><br><br>
</head>

<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>

<?php

include "config.php";
$First_Name = "";

$First_Name = $POST['First_Name'];
$Surname = $POST['Surname'];

$sql = "INSERT INTO staff (First_Name, Surname) VALUES ('$First_Name, $Surname)";

//header("refresh:2; url="SupervisorCopy.php");

 ?>


First Name: <input type="text" name="First_Name">
Surname: <input type="text" name="Surname">
<input type="submit" value="insert">




<?php
include("header.php");
include("config.php");


$result = mysqli_query($conn,"select * from Supervisor");


echo "<table border='0'>
<tr>
<th>First Name</th>
<th>Surname</th>
<th>Address</th>
<th>Postcode</th>
<th>Salary</th>
<th>Email</th>




</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['First_Name'] . "</td>";
echo "<td>" . $row['Surname'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['Postcode'] . "</td>";
echo "<td>" . $row['Salary'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";


echo "</tr>";
}
echo "</table>";

?>


</div>
<body>

   
</body>

</html>
