	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wine Distillery</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body  method="post">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Wine </span>Distillery - Nasugbu</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
			<div class="profile-usertitle">
				<div class="profile-usertitle-name" style="margin: 10px;"><h2>Staff</h2></div>
			</div>
			<div class="clear"></div>
		<ul class="nav menu">
			<li><a href="staff.php"><em class="fa fa-desktop">&nbsp;</em> POS</a></li>
			<li  class="active"><a href="invoice.php"><em class="fa fa-table">&nbsp;</em> Invoice</a></li>
			<li><a href="staff_recenttransaction.php"><em class="fa fa-history">&nbsp;</em>Recent Transaction</a></li>
			<li><a href="destroy.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-table"></em>
				</a></li>
				<li class="active">Invoice</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<button class="btn btn-info" style="padding: 10px;margin-top: 3%; float: right;" data-toggle="modal" data-target="#myModal">Proceed to Checkout</button>
				<h1 class="page-header">Invoice</h1>
			</div>
		</div><!--/.row-->

		<?php include'myfunctions.php';?>
		<div class="panel panel-container">
			<table class="table table-striped table-hover">
				<tr>
			        <th style="text-align: center;"><h4>Name of Product</h4></th>
			        <th style="text-align: center;"><h4>Price</h4></th>
			        <th style="text-align: center;"><h4>Sub-total</h4></th>
			        <th style="text-align: center;"><h4>Piece(s)</h4></th>
			        <th style="text-align: center;"><h4>Action</h4></th>
			    </tr>
			    <tr>
			        <?php
			       	    $link = connection();
			        	$query = "select * from temp_table";
			        	$result1 = mysqli_query($link, "SELECT * FROM time_log ORDER BY t_ID desc limit 1") or die(mysqli_error($link));
			        	while ($rowd = mysqli_fetch_array($result1)) {
			        		$cash = $rowd['U_name'];
			        	}
			     	   	$result = mysqli_query($link,$query) or die(mysqli_error($link));
				        $a = array();
				    	$prod_name = array();
				    	$prod_price = array();
				    	$person1 = array();
				    	$prod_code = array();
				    	$prod_subtotal = array();
				    	$id12 = array();

						$n = 1;  
						
						while ($row = mysqli_fetch_array($result)) {
			            $P_price = $row['Product_price'];
			            $P_name = $row['Product_name'];
			            $P_code = $row['Product_code'];
			            $P_numpersons = $row['No_of_person'];
			            
			            $subtotal = $P_price * $P_numpersons;

			            $total = array_push($a, $subtotal);
			            $id = $row['ID']; 

			            $pname = array_push($prod_name, $P_name);
			            $pprice = array_push($prod_price, $P_price);
			            $pcode = array_push($prod_code, $P_code);
			            $pperson = array_push($person1, $P_numpersons);
			            $psub = array_push($prod_subtotal, $subtotal);
			            $id13 = array_push($id12, $id);

			            ?>
			      <td style="text-align: center;"><?php echo $P_name;?></td>
			      <td style="text-align: center;"><?php echo "Php ".$P_price.".00";?></td>
			      <td style="text-align: center;"><?php echo"Php ".$subtotal.".00"; ?></td>
			      <td style="text-align: center;"><?php echo $P_numpersons;?>
			      		<a href='add_num_of_person.php?id=<?php echo "$id";?> &action=add'><span class="glyphicon glyphicon-add">+</span></a> / 
						<a href='add_num_of_person.php?id=<?php echo "$id";?> &action=sub'><span  class="glyphicon glyphicon-minus">-</span></a>
			      </td>
			      <td style="text-align: center;"><a href='deleteORDER.php?id=<?php echo "$id";?>' name="add">Remove</a></td>
			      </tr>
			         <?php $n++; }?>
			       <?php $totaaal = array_sum($a) ?>
			      <tr class="totalColumn">
			      	<td></td>
			      	<td></td>
			      	<td style="text-align: center;">Total : <?php echo $totaaal.".00" ;?> </td>
			      	<td></td>
			      </tr>
				
			</table><br>
					<br>
		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Checkout</h4>
			      </div> 

			      <div class="modal-body">

	<form method="post" oninput="change.value = Math.round(amount.value) - Math.round(totalprice.value);">
				  <div style=" width: 80%; margin-left: 10%;">
		      			<label><h5>First name :</label>
		        			<input type="text" name="fname" placeholder="Optional" style="width: 50%"></h5>
		    			<label><h5>Last name :</label>
		        			<input type="text" name="lname" placeholder="Optional" style="width: 50%"></h5>
		    			<label><h5>Age :</label>
		        			<input type="number" max="50" min="18" name="age"; style="margin-left: 10%"></h5>

		        	<hr>
		        	<h4><label>Payment</label></h4>
		        	<hr>
		        		<label><h5>Total : Php</label>
						<input type="text" name="totalprice" value="<?php echo $totaaal.".00" ;?>" readonly></h5>

						<label><h5>Enter Amount : Php</label>
						<input type="text" name="amount"></h5>	

						<label><h5>Change : Php</label>
						<input type="text" name="change"></h5>	
						<br><br>

		   			  	<button name="save" type="submit" style="width:80%; margin-left: 5%;" class="btn btn-info btn-lg">Done</button>
		      	  </div>
		      	   	
				<?php  
					 $connection = mysqli_connect("localhost","root","","marketsales");
				     $db_selected = mysqli_select_db($connection,"marketsales");
					
					if(isset($_POST['save'])){
							$firstname=$_POST['fname'];
							$lastname=$_POST['lname'];
							$age=$_POST['age'];
						    date_default_timezone_set("Asia/Manila");
						    $date = date("Y-m-d");
    						$time = date("h:i:sa");

						    foreach ($id12 as $rec => $value) 
						    {
						    	$temp_person = $person1[$rec];
						    	$temp_pname = $prod_name[$rec];
						    	$temp_pprice = $prod_price[$rec];
						    	$temp_pcode = $prod_code[$rec];
						    	$temp_sub = $prod_subtotal[$rec];						    
								$sql = "INSERT INTO recenttransaction (r_date, r_time, First_name,Last_name,Age,No_of_person,Product_name,Product_price,Product_code, cashier, Sub_total) VALUES ('$date', '$time', '$firstname','$lastname','$age','$temp_person','$temp_pname','$temp_pprice','$temp_pcode', '$cash', '$temp_sub')";
								mysqli_query($connection,$sql);
							}
							
							$sql1 = "DELETE FROM temp_table";
							mysqli_query($connection,$sql1);
							header("location:staff.php");
						}
					

				?>

			      </div>
			      <div class="modal-footer">
			  	</form>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>


	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
		
</body>
</html>