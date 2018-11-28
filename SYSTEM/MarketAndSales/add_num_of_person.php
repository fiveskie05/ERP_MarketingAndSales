<?php
	include "myfunctions.php";
	$link = connection();
	$id = $_GET['id'];
	$action = $_GET['action'];

	$query = "select No_of_person from temp_table where ID = $id";

	$result = mysqli_query($link,$query) or die(mysqli_error($link));
		while ($row = mysqli_fetch_array($result)) {
			if ($action == "add") {
				$new_quantity = $row['No_of_person']+1;
			}
			else{
				if ($row['No_of_person']==1) {
					$query = "delete from temp_table where ID='$id' ";
					$result = mysqli_query($link,$query);
					header("location:invoice.php");
				}
				else{

				$new_quantity = $row['No_of_person']-1;
				}
			}
		}

	$query = "update temp_table set No_of_person = '$new_quantity' where ID='$id' ";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	header("location:invoice.php");
?>