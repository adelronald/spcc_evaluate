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

	<style type="text/css">
		.mb-10 {
			margin-bottom: 10px;
		}
	</style>
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
		        	<a href="<?php echo base_url(); ?>" style="color: white;">
		        		Online Evaluation
		        	</a>
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
		    	<section class="content-header">
		    		<h1>School Evaluation Form</h1>
		    	  <ol class="breadcrumb">
		    	    <li><a href="<?php echo base_url('main'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		    	    <li class="active">Evaluation Form</li>
		    	  </ol>
		    	</section>

		      <!-- Main content -->
		      <section class="content">
		      	<div class="box box-primary">
		      		<div class="box-header with-border" style="font-size: 24px">
		      			
		      		</div>
		      		<form role="form">
		      			<div class="box-body">
		      				<!-- BUTTON START -->
		      				<div class="col-md-10 col-md-offset-1 mb-10" style="padding: 10px 10px; background-color: #d9dddc">
		      					School Program
		      					<a href="#list1" data-toggle="collapse" class="pull-right">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list1" class="col-md-10 col-md-offset-1 collapse in">
		      					<!-- START 1-1 -->
		      					<b>How well do the activities offered at your child's school match his or her interests?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q1">
		      					      Extreamely well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q1">
		      					      Quite well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q1">
		      					      Fairly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q1">
		      					      Mildly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q1">
		      					      Not well at all
		      					    </label>
		      					  </div>
		      					</div>

		      					<b>How well do the teaching styles of your child's teachers match your child's learning style?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q2">
		      					      Extreamely well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q2">
		      					      Quite well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q2">
		      					      Fairly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q2">
		      					      Mildly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q2">
		      					      Not well at all
		      					    </label>
		      					  </div>
		      					</div>

		      					<b>At your child's school, how well does the overall approach to discipline work for your child?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q3">
		      					      Extreamely well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q3">
		      					      Quite well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q3">
		      					      Fairly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q3">
		      					      Mildly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q3">
		      					      Not well at all
		      					    </label>
		      					  </div>
		      					</div>

		      					<b>How much of a sense of belonging does your child feel at his or her school?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q4">
		      					      A tremendous amount of belonging
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q4">
		      					      Quite a bit of belonging
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q4">
		      					      Some belonging
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q4">
		      					      A little bit of belonging
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q4">
		      					      No belonging at all
		      					    </label>
		      					  </div>
		      					</div>

		      					<b>How comfortable is your child in asking for help from school adults?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q5">
		      					      Extremely comfortable
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q5">
		      					      Quite comfortable
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q5">
		      					      Some comfortable
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q5">
		      					      Mildly comfortable
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q5">
		      					      Not comfortable at all
		      					    </label>
		      					  </div>
		      					</div>

		      					<b>How well do you feel your child's school is preparing him or her for his or her next academic year?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q6">
		      					      Extreamely well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q6">
		      					      Quite well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q6">
		      					      Fairly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q6">
		      					      Mildly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q6">
		      					      Not well at all
		      					    </label>
		      					  </div>
		      					</div>

		      					<b>Given your child's cultural background, how good a fit is his or her school?</b>
		      					<div class="form-group">
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q7">
		      					      Extreamely well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q7">
		      					      Quite well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q7">
		      					      Fairly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q7">
		      					      Mildly well
		      					    </label>
		      					  </div>
		      					  <div class="radio">
		      					    <label>
		      					      <input type="radio" name="q7">
		      					      Not well at all
		      					    </label>
		      					  </div>
		      					</div>
		      					<!-- END -->
		      				</div>
		      				<!-- BUTTON END -->
		      			</div>
		      			<div class="box-footer">
		      				<button type="submit" class="btn btn-primary pull-right">Submit</button>
		      			</div>
		      		</form>
		      	</div>
		      </section>
		    </div>
		</div>

		<footer class="main-footer">
		    <div class="container">
		      <div class="pull-right hidden-xs">
		        <b>All rights reserved</b>
		      </div>
		      <strong>Copyright &copy; 2021 <a href="https://www.sourcecodester.com/">SPCC</a></strong>
		    </div>
		    <!-- /.container -->
		</footer>
	</div>
<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>