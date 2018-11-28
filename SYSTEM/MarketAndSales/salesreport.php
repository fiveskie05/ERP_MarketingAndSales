
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,u700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<form action=  "printpdf.php" method="POST" enctype="multipart/form-data">


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
			<li><a href="manageusers.php"><em class="fa fa-users">&nbsp;</em> Employee</a></li>
			<li><a href="recenttransaction.php"><em class="fa fa-history">&nbsp;</em>Recent Transaction</a></li>
			<li  class="active"><a href="salesreport.php"><em class="fa fa-file-text-o">&nbsp;</em> Sales Report</a></li>

			<li><a href="loginstyle.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-file-text-o"></em>
				</a></li>
				<li class="active">Sales Report</li>
			</ol>
		</div><!--/.row-->
	

	<!--DAILY REPORT -->	
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daily Report</h1>
			</div>
		</div><!--/.row-->
			<table class="table table-hover table-striped" >
				<tr>
					<th style="text-align: center;"><h4>Date</h4></th>
					<th style="text-align: center;"><h4>Total Price</h4></th>
				</tr>
				<?php include 'myfunctions.php'; 
					  $link = connection();
					  $query = "select date(r_date) as date,DAYNAME(r_date) as dayname,SUM(Product_price) as total from recenttransaction group by date desc";
					  $result = mysqli_query($link,$query) or die(mysqli_error($link));
					?>

					<?php  while ($row = mysqli_fetch_array($result)) {
						$date = $row['date'];
						$dayname = $row['dayname'];
						$total = $row['total'];
					 ?>
				<tr>
					<td style="text-align: center;"><?php echo $date."-".$dayname;?></td>
					<td style="text-align: center;"><?php echo "Php ".$total.".00";?></td>
					<td></td>
				</tr>
					<?php } ?>	
			</table>
			<button class="fa fa-print btn btn-info" style="margin-left: 90%" type="submit" name="submit"> Print</button>




	<!--WEEKLY REPORT -->	
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Weekly Report</h1>
			</div>
		</div><!--/.row-->

		<table class="table table-hover table-striped">
			<tr>
				<th style="text-align: center;"><h4>Week Number</h4></th>
				<th style="text-align: center;"><h4>Total Price</h4></th>
			</tr>
			<?php 
				  $query = "select year(r_date) as year,month(r_date) as month,WEEKOFYEAR(r_date) as week_num,SUM(Product_price) as total from recenttransaction group by week_num";
				  $result = mysqli_query($link,$query) or die(mysqli_error($link));
				?>

				<?php  while ($row = mysqli_fetch_array($result)) {
					$week = $row['week_num'];
					$month = $row['month'];
					$year = $row['year'];
					$total = $row['total'];
				 ?>
			<tr>
				<td style="text-align: center;"><?php echo $week;?></td>
				<td style="text-align: center;"><?php echo "Php ".$total.".00";?></td>
				<td></td>
			</tr>
				<?php } ?>	
		</table>
		<button class="fa fa-print btn btn-info" style="margin-left: 90%" type="submit" name="submit1"> Print</button>


	<!-- MONTHLY REPORT -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Monthly Report</h1>
			</div>
		</div>

		<table class="table table-hover table-striped">
			<tr>
				<th style="text-align: center;"><h4>Date</h4></th>
				<th style="text-align: center;"><h4>Total Price</h4></th>
			</tr>
			<?php  

				  $query1 = "select year(r_date) as year,monthname(r_date) as month, SUM(Product_price) as total1 from recenttransaction group by concat(year,month)";
				  $result = mysqli_query($link,$query1) or die(mysqli_error($link));
				?>

				<?php  while ($row = mysqli_fetch_array($result)) {
					$date = $row['month']."-".$row['year'];
					$total1 = $row['total1'];
				 ?>
			<tr>
				<td style="text-align: center;"><?php echo $date;?></td>
				<td style="text-align: center;"><?php echo "Php ".$total1.".00";?></td>
				<td></td>
			</tr>
				<?php } ?>
		</table>
		<h4><button class="fa fa-print btn btn-info" style="margin-left: 90%" type="submit" name="submit2"> Print</button></h4>
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
</form>
</body>
</html>