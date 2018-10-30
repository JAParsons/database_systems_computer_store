<?php
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
?>