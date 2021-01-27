<?php //echo validation_errors(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
</head>
<body class="hold-transition skin-blue-light layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
		  <nav class="navbar navbar-static-top">
		    <div class="container">
		      <div class="navbar-header">
		        <a href="#" class="navbar-brand">
		        	<img src="<?php echo base_url('assets/img/oe_logo.png'); ?>" style="height: 100%">
		        </a>
		        <div class="navbar-brand" style="padding: 15px">
		        	<b>Online Evaluation</b>
		        </div>

		        <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		          <span><i class="fa fa-bars"></i></span>
		        </button> -->
		      </div>

		      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
		        <ul class="nav navbar-nav">
	                <!-- <li><a href='index.php'>HOME</a></li>
	                <li><a href='transaction.php'>TRANSACTION</a></li> -->
		        </ul>
		      </div>
		      <div class="navbar-custom-menu" style="right: 0px">
		        <ul class="nav navbar-nav">
		          <li class="dropdown user user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <img src="<?php echo base_url('assets/img/oe_logo.png'); ?>" class="user-image" alt="User Image" >
		              <span class="hidden-xs">User 1</span>
		            </a>
		            <ul class="dropdown-menu">
		              <li class="user-header">
		                <img src="<?php echo base_url('assets/img/oe_logo.png'); ?>" class="img-circle" alt="User Image">

		                <p>
		                  User 1
		                  <!-- <small>Member since <?php echo date('M. Y', strtotime($user['admn_create_on'])); ?></small> -->
		                </p>
		              </li>
		              <li class="user-footer">
		                <div class="pull-left">
		                	b
		                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
		                </div>
		                <div class="pull-right">
		                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
		                </div>
		              </li>
		            </ul>
		          </li>
		        </ul>
		      </div>
		    </div>
		  </nav>
		</header>

		<div class="content-wrapper">
		    <div class="container">
		      <!-- Main content -->
		      <section class="content">
		      	<div class="col-md-10 col-md-offset-1" style="padding: 10px; background-color: gold; margin-bottom: 10px">
  					<b>TEACHER'S</b>
  					<a href="#teach" data-toggle="collapse" class="pull-right">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
							</svg>
						</a>
  				</div>
  				<div id="teach" class="collapse col-md-10 col-md-offset-1">
  					<table class="table table-bordered table-hover">
  						<thead>
  							<th>#</th>
  							<th>Teachers Name</th>
  							<th>Subject</th>
  							<th>Time</th>
  						</thead>
  						<tbody>
  							<tr>
  								<th>1</th>
  								<td><a href="<?php echo base_url('main/evaluation_form'); ?>">Manuel Verula</a></td>
  								<td>Kalokohan</td>
  								<td>24/7</td>
  							</tr>
  							<tr>
  								<th>2</th>
  								<td><a href="#">Manuel Verula</a></td>
  								<td>Kalokohan</td>
  								<td>24/7</td>
  							</tr>
  						</tbody>
  					</table>
  				</div>

  				<div class="col-md-10 col-md-offset-1" style="padding: 10px; background-color: gold; margin-bottom: 10px">
  					<b>SCHOOL</b>
  					<a href="#school" data-toggle="collapse" class="pull-right">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
							</svg>
						</a>
  				</div>
  				<div id="school" class="collapse col-md-10 col-md-offset-1">
  					<table class="table table-bordered table-hover">
  						<thead>
  							<th>#</th>
  							<th>School Name</th>
  						</thead>
  						<tbody>
  							<tr>
  								<th>1</th>
  								<td><a href="<?php echo base_url('main/sevaluation_form'); ?>">Systems Plus Computer College</a></td>
  							</tr>
  						</tbody>
  					</table>
  				</div>
		      </section>
		    </div>
		</div>

		<footer class="main-footer">
		    <div class="container">
		      <div class="pull-right hidden-xs">
		        <b>All rights reserved</b>
		      </div>
		      <strong>Copyright &copy; 2021 <a href="#">SPCC</a></strong>
		    </div>
		    <!-- /.container -->
		</footer>
	</div>
<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>