
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
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color: red">
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
			<li class="active"><a href="index.php"  style="background-color: red"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="manageusers.php"><em class="fa fa-users">&nbsp;</em> Employee</a></li>
			<li><a href="recenttransaction.php"><em class="fa fa-history">&nbsp;</em> Recent Transaction</a></li>
			<li><a href="salesreport.php"><em class="fa fa-file-text-o">&nbsp;</em> Sales Report</a></li>
			<li><a href="loginstyle.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<?php  include 'myfunctions.php'; 
			$link = connection();
			$query = "select SUM(Product_price) as total,count(*) as count11 from recenttransaction WHERE MONTH(r_date) = MONTH(CURRENT_DATE()) AND YEAR(r_date) = YEAR(CURRENT_DATE())";
		    $result = mysqli_query($link,$query) or die(mysqli_error($link));
		      while ($row = mysqli_fetch_array($result)) {
					$total = $row['total'];
					$rr = $row['count11'];
			  }
			?>

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-money color-blue"></em>
							<div><h2><?php echo 'Php '.$total.'.00';?></h2></div>
							<div class="text-muted">Total Sales this month</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-orange"></em>
							<div><h2><?php echo $rr;?></h2></div>
							<div class="text-muted">Products Availed this month</div>
						</div>
					</div>
				</div>

			</div><!--/.row-->	
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Monthly
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						<script type="text/javascript" src="gstatic/loader.js"></script>
       					<div id="LineChart" style="width: 900px; height: 500px;"></div>
   
			<?php  
				$query1 = "select year(r_date) as year,monthname(r_date) as month, SUM(Product_price) as total1 from recenttransaction group by month order by month DESC";
				$result = mysqli_query($link,$query1) or die(mysqli_error($link));
			 ?>

					<script type="text/javascript">
					  google.charts.load('current', {'packages':['corechart']});
					      google.charts.setOnLoadCallback(drawChart);

					      function drawChart() {

					        var data = google.visualization.arrayToDataTable([
					          ['Date', 'Sales'],
					          <?php while ($row = mysqli_fetch_array($result)) {
													$date = $row['month']."-".$row['year'];
													$total1 = $row['total1'];
												?>
					          ['<?php echo $date;?>',     <?php echo $total1;?>],

					          <?php } ?>

					        ]);

					        var options = {
					          title: 'Monthly Sales',
					          
					        };

					        var chart = new google.visualization.LineChart(document.getElementById('LineChart'));

					        chart.draw(data, options);
					      }

					</script>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
		<script>
			window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
		</script>
		
</body>
</html>