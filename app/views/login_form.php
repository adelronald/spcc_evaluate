<?php //echo validation_errors(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
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
		        	Online Evaluation
		        </div>
		        
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		          <i class="fa fa-bars"></i>
		        </button>
		      </div>
		    </div>
		  </nav>
		</header>

		<div class="content-wrapper">
		    <div class="container">
		      <!-- Main content -->
		      <section class="content">
		      	<div class="login-box">
		      	  	<div class="login-logo">
		      	  		<b>Welcome User!</b>
		      	  	</div>
		      	  
		      	  	<div class="login-box-body">
		      	    	<p class="login-box-msg">Sign in to start your session</p>

		      	    	<form action="<?php echo base_url(); ?>" method="POST">
		      	    		<?php echo form_open('form'); ?>  
		      	      		<div class="form-group has-feedback">
		      	        		<input type="text" class="form-control" name="uname" placeholder="input User Account" autofocus value="">
		      	        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
		      	      		</div>
		      	        	<div class="form-group has-feedback">
		      	            	<input type="password" class="form-control" id="tpass" name="upass" placeholder="input Password" >
		      	            	<span id="vpass" class="glyphicon glyphicon-lock form-control-feedback" onclick=""></span>
		      	        	</div>
		      	    		<div class="row">
		      	    			<div class="col-xs-6 pull-right">
		      	    			    <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
		      	    			</div>
		      	    		</div>
		      	    	</form>
		      	  	</div>
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