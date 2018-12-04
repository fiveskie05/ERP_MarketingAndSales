
<?php
	include "myfunctions.php";
	$link = connection();
	$id = $_GET['id'];

	$query = "INSERT INTO temp_table (Product_name,Product_price,Product_code,Product_ID,No_of_Person) SELECT Services, Amount, Product_code,ID,No_of_Person FROM products_and_services WHERE ID=$id";

	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	header("location:staff.php");
?>