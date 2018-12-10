
<?php include 'myfunctions.php'; ?>
<?php 
  $prod_id = $_GET['id'];
  $db = mysqli_connect("localhost","root","","marketsales");

  $query_fetch = "SELECT * from products_and_services where id='$prod_id'";
  $result = mysqli_query($db,$query_fetch);

  while ($row = mysqli_fetch_array($result)) {
    $prodname = $row['Services'];
    $prodprice = $row['Amount'];
  }
?>
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
			<li class="active"><a href="products.php"><em class="glyphicon glyphicon-glass">&nbsp;</em> Products</a></li>
			<li><a href="manageusers.php"><em class="fa fa-users">&nbsp;</em> Employee</a></li>
			<li><a href="recenttransaction.php"><em class="fa fa-history">&nbsp;</em>Recent Transaction</a></li>
			<li><a href="salesreport.php"><em class="fa fa-file-text-o">&nbsp;</em> Sales Report</a></li>
			<li><a href="loginstyle.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-users"></em>
				</a></li>
				<li class="active">Employee</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<button class="btn btn-lg btn-info" style="float: right; margin-top: 3%" data-toggle="modal" data-target="#myModal">Add new</button>
				<h1 class="page-header">Product Info</h1>
			</div>
		</div><!--/.row-->

		

		<div class="panel panel-container">
			<form method="post">
			  <div style=" width: 80%; margin-left: 10%;">
	      			<label><h3>Product name :</label>
	        			<input type="text" name="pname" style="width: 50%" value="<?php echo $prodname ?>" disabled ></h3>
	    			<label><h3>Price :</label>
	        			<input type="number" min="18" name="price" value="<?php echo $prodprice ?>"></h3>

	   			  	<button name="save" style="width:80%; margin-left: 5%;" class="btn btn-info btn-lg">Save</button>
	   			  	<div>
	   			  		<button style="float: right; margin-top: 20px;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	   			  	</div>
	      	  </div>

	      	  <?php  
				 $connection = mysqli_connect("localhost","root","","marketsales");
			     $db_selected = mysqli_select_db($connection,"marketsales");
				
				if(isset($_POST['save'])){
						$productname=$_POST['pname'];
						$pprice=$_POST['price'];

					$sql = "UPDATE products_and_services SET Amount = '$pprice' where id = '$prod_id'";
					mysqli_query($connection,$sql);
					header("location:products.php");
				}
			?>
	      	   	
		</form>
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