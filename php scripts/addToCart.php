<?php

session_start();

include("../config.php");
#include("header.php");

if (empty($_SESSION['cart']))
	{
		$_SESSION['cart'] = array();
	}
	
array_push($_SESSION['cart'], $_GET['id']);

header('Location:https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/store.php');
?>

<p>
	Product was successfully added to your cart!
</p>