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
	
	<link rel="icon" href="assets/dragon.png">
<br><br><br><br><br><br>
</head>


<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
$hostname = "silva.computing.dundee.ac.uk";
$username = "18ac3u04";
$password = "abc123";
$databaseName = "18ac3d04";
    
    // get values form input text and number

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$Address = $_POST['Address'];
	$Postcode = $_POST['Postcode'];
	$Salary = $_POST['Salary'];
	$Email = $_POST['Email'];
   
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `staff`(`First_Name`, `Surname`, `Address`, `Postcode`, `Salary`, `Email`) VALUES ('$fname','$lname','$Address','$Postcode','$Salary','$Email')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <form action="php_insert_data_in_mysql_database.php" method="post">

            <input type="text" name="fname" required placeholder="FirstName"><br><br>
            <input type="text" name="lname" required placeholder="LastName"><br><br>
			<input type="text" name="Address" required placeholder="Address"><br><br>
			<input type="text" name="Postcode" required placeholder="Postcode"><br><br>
			<input type="text" name="Salary" required placeholder="Salary"><br><br>
			<input type="text" name="Email" required placeholder="Email"><br><br>
			

           

            <input type="submit" name="insert" value="Add Data To Database">

        </form>

    </body>

</html>



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



<body>

   
</body>

</html>
