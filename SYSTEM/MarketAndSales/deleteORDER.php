<?php
	include "myfunctions.php";
	$link = connection();
	$id = $_GET['id'];

	$query = "delete from temp_table where ID = $id";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	header("location:invoice.php");
?>