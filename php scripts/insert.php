<?php
include "config.php";

//mysql_select_db("cis_id", $con);
$sql="INSERT INTO Staff (First_Name, Surname)
VALUES
('$_POST[First_Name]','$_POST[Surname]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
mysql_close($con)
?>