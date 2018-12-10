<?php
	include 'myfunctions.php';
	$link = connection();
	mysqli_query($link,"delete from temp_table");
	header("location:Loginstyle.php");	

?>