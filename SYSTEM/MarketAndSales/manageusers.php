
<?php include 'myfunctions.php'; ?>
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
			<li class="active"><a href="manageusers.php"><em class="fa fa-users">&nbsp;</em> Employee</a></li>
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
				<h1 class="page-header">Manage Employees</h1>
			</div>
		</div><!--/.row-->

		<!--Modal-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">User Info</h4>
		      </div> 
		      <div class="modal-body">
		<form method="post">
			  <div style=" width: 80%; margin-left: 10%;">
	      			<label><h3>First name :</label>
	        			<input type="text" name="fname" style="width: 50%"></h3>
	    			<label><h3>Last name :</label>
	        			<input type="text" name="lname" style="width: 50%"></h3>
	    			<label><h3>Age :</label>
	        			<input type="number" max="50" min="18" name="age";></h3>

	    	      	<div>
	      				<label><h3>Gender :</label><br>
	      			  		&nbsp&nbsp&nbsp<input type="radio" name="gender" value="Male">&nbspMale<br>
							&nbsp&nbsp&nbsp<input type="radio" name="gender" value="Female">&nbspFemale</h3>
	   			  	
	   			  		<label><h3>Position</label><br>
	   			  			&nbsp&nbsp&nbsp<input type="radio" name="position" value="Staff">&nbspStaff
	   			  			&nbsp&nbsp&nbsp<input type="radio" name="position" value="Admin">&nbspAdmin</h3>
	   			  	</div>
	   			  	<button name="save" style="width:80%; margin-left: 5%;" class="btn btn-info btn-lg">Save</button>
	      	  </div>
	      	   	
		</form>
			<?php  
				 $connection = mysqli_connect("localhost","root","","marketsales");
			     $db_selected = mysqli_select_db($connection,"marketsales");
				
				if(isset($_POST['save'])){
						$firstname=$_POST['fname'];
						$lastname=$_POST['lname'];
						$age=$_POST['age'];
						$gender=$_POST['gender'];
						$position=$_POST['position'];

					$sql = "INSERT INTO users (First_name,Last_name,Age,Gender,Position,Username,Password) VALUES ('$firstname','$lastname','$age','$gender','$position','$firstname','$lastname')";
					mysqli_query($connection,$sql);
					header("location:manageusers.php");
				}
			?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="panel panel-container">
			<table class="table table-striped">
				<tr>
					<th><h3><b>No.</b></h3></th>
    				<th><h3><b>Full name</b></h3></th>
    				<th><h3><b>Age</b></h3></th>
    				<th><h3><b>Gender</b></h3></th>
    				<th><h3><b>Position</b></h3></th>
    				<th><h3><b>Action</b></h3></th>
				</tr>

				<tr>
					<?php
						$link = connection();
						$query = "select * from users";
						$result = mysqli_query($link,$query) or die(mysqli_error($link));
					?>
					<?php
						$n = 1;
						while ($row = mysqli_fetch_array($result)) {
						$id = $row['ID'];
					?>
					<td><?php echo $n ?></td>
    				<td><?php echo $row['First_name']." ". $row['Last_name']?></td>
    				<td><?php echo $row['Age']?></td>
    				<td><?php echo $row['Gender']?></td>
    				<td><?php echo $row['Position']?></td>
    				<td><a href='deleteUSER.php?id=<?php echo "$id";?>'>Remove</a></td>
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