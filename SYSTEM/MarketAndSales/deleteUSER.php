<?php
	include "myfunctions.php";
	$link = connection();
	$id = $_GET['id'];

	$query = "delete from users where ID = $id";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	header("location:ManageUsers.php");
?>