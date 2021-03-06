
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
<body method="post">
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
				<div class="profile-usertitle-name" style="margin: 10px;"><h2>Admin</h2></div>
			</div>
			<div class="clear"></div>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="products.php"><em class="glyphicon glyphicon-glass">&nbsp;</em> Products</a></li>
			<li><a href="manageusers.php"><em class="fa fa-users">&nbsp;</em> Employee</a></li>
			<li class="active"><a href="recenttransaction.php"><em class="fa fa-history">&nbsp;</em>Recent Transaction</a></li>
			<li><a href="salesreport.php"><em class="fa fa-file-text-o">&nbsp;</em> Sales Report</a></li>
			<li><a href="loginstyle.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-history"></em>
				</a></li>
				<li class="active">Recent Transactions</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Recent Transactions</h1>
			</div>
		</div><!--/.row-->
		
		<table class="table table-hover table-striped">
			<tr>
				<th style="text-align: center;"><h4>Date</h4></th>
			    <th style="text-align: center;"><h4>Customer Name</h4></th>
			    <th style="text-align: center;"><h4>Service Availed</h4></th>
			    <th style="text-align: center;"><h4>Total Price</h4></th>
			</tr>
			<tr>
				<?php include 'myfunctions.php'; 
				  $link = connection();
				  $query = "select * from recenttransaction order by r_date desc";
				  $result = mysqli_query($link,$query) or die(mysqli_error($link));
				?>

				<?php  while ($row = mysqli_fetch_array($result)) {
				 ?>

				<td style="text-align: center;"><?php echo $row['r_date'];?></td>
				<td style="text-align: center;"><?php echo $row['First_name']." ".$row['Last_name'];?></td>
				<td style="text-align: center;"><?php echo $row['Product_name'];?></td>
				<td style="text-align: center;"><?php echo "Php ".$row['Product_price'].".00";?></td>
			</tr>
				<?php } ?>
		</table>
		
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