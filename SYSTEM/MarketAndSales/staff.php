

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
<body>
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
			<li class="active"><a href="staff.php"><em class="fa fa-desktop">&nbsp;</em> POS</a></li>
			<li><a href="invoice.php"><em class="fa fa-table">&nbsp;</em> Invoice</a></li>
			<li><a href="staff_recenttransaction.php"><em class="fa fa-history">&nbsp;</em>Recent Transaction</a></li>
			<li><a href="destroy.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-desktop"></em>
				</a></li>
				<li class="active">POS</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">POS</h1>
			</div>
		</div><!--/.row-->

		<?php include'myfunctions.php';?>
		<div class="panel panel-container">
			<table class="table table-striped table-hover">
				<tr style="background-color: #f5f5f5;">
      				<th style="text-align: center;"><h2>Product ID</h2></th>
      				<th style="text-align: center;"><h2>Products</h2></th>
			      	<th style="text-align: center;"><h2>Amount</h2></th>
			      	<th style="text-align: center;"><h2>Action</h2></th>
			    </tr>
			    <tr>
			      	<?php
			      	$link = connection();
			      	$query = "select * from products_and_services";
			      	$result = mysqli_query($link,$query) or die(mysqli_error($link));
			      	?>
			          <?php
			            $n = 1;
			            while ($row = mysqli_fetch_array($result)) {
			            $id = $row['ID'];
			          ?>
				      <td style="text-align: center;"><?php echo $row['ID']?></td>
				      <td style="text-align: center;"><?php echo $row['Services']?></td>
				      <td style="text-align: center;"><?php echo "Php ".$row['Amount'].".00"?></td>
				      <td style="text-align: center;"><a href='add.php?id=<?php echo "$id";?>' name="add">Add</td>
			    </tr>  
      <?php $n++; }?>
				
			</table>
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