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
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<br>
</head>

<style>
	table{
		width:75%;
		margin:auto;
		text-align:left;
		table-layout:fixed;
		border-collapse:collapse; 
		padding: 15px;
		
	}

	
	tbody td{
		
		padding: 10px;
}

tbody tr:nth-child(odd){
  background-color: #babbbc;
  color: black;
  
}

tbody tr:nth-child(even){
  background-color: #dbdee0;
  color: black;
  
 
}

tbody th{
	background-color: #d0112b;
	color: white;
	padding: 12px;
	
}
	
	
</style>



<?php
include("header.php");


$servername = "silva.computing.dundee.ac.uk";
$username = "18ac3u04";
$password = "abc123";
$dbname = "18ac3d04";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "failed connection";
}

$result = mysqli_query($conn,"SELECT * FROM product");




echo "<table border='0'>
<tr>
<th>Product Name</th>
<th>Product Type</th>
<th>Price</th>
<th>Make</th>
<th>Quantity</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Product_Name'] . "</td>";
echo "<td>" . $row['Product_Type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $row['Make'] . "</td>";
echo "<td>" . $row['Quantity'] . "</td>";

echo "</tr>";
}
echo "</table>";



?>

<?php
include("header.php");


$servername = "silva.computing.dundee.ac.uk";
$username = "18ac3u04";
$password = "abc123";
$dbname = "18ac3d04";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "failed connection";
}

$result = mysqli_query($conn,"select * from Rentalview");




echo "<table border='0'>
<tr>
<th>Rental ID</th>
<th>First Name</th>
<th>Surname</th>
<th>Start Date</th>
<th>End Date</th>



</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['RentalID'] . "</td>";
echo "<td>" . $row['First_Name'] . "</td>";
echo "<td>" . $row['Surname'] . "</td>";
echo "<td>" . $row['Start_Date'] . "</td>";
echo "<td>" . $row['End_Date'] . "</td>";


echo "</tr>";
}
echo "</table>";



?>



<body>

   
</body>

</html>
