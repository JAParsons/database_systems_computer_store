<?php 



include("../config.php");
#include("header.php");

session_start();

$id = trim($_GET['id']);

$items = $_SESSION['cart'];
var_dump($_SESSION['cart']);

$del = array_search($id, $items);
var_dump($del);

unset($items[$del]);
array_values($items);
$_SESSION['cart'] = $items;
var_dump($_SESSION['cart']);

header('Location:https://zeno.computing.dundee.ac.uk/2018-ac32006/Team4/basket.php');
?>

<p>
	Product was successfully deleted
</p>