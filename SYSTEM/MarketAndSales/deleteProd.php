<?php
	include "myfunctions.php";
	$link = connection();
	$id = $_GET['id'];

	$query = "delete from products_and_services where ID = $id";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	header("location:products.php");
?>