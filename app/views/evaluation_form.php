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
		    		<h1>Teacher Evaluation Form</h1>
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
		      					<b>A. PERSONALIDAD</b>
		      					<a href="#list1" data-toggle="collapse" class="pull-right" onclick="changeArrow(this.href)">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list1" class="col-md-10 col-md-offset-1 collapse in">
		      					<!-- START 1-1 -->
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mahinahon
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Well prepared, Dedicated sa kanyang trabaho
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Hinahandle kami ng maayos
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mapag pasensyang estudyante, Mahaba ang pasensya
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      English as her medium language
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Thoughtful, Supportive, Madaling lapitan kapag may problema, Generous
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malambing sa estudyante, Sweet
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Epektibo ang pamamaraan ng pagtuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nakikisama sa biruan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Bago magsimula papatahimikin muna ang klase
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Madaling pakisamahan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Marunong umintindi, marunong makisama
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Tahimik kapag naiinis
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Laging nagmamasid kapag may quiz
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Makulit
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos magsalita kahit na may braces
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Always puts her smile before entering class
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Serious
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos sa pagtuturo ngunit minsa'y mahirap unawain ang kanyang pananalita
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      She's so sensitive interms of words
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Paiba iba ng mood, Moody in a nice way
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>

		      					  <!-- ENTREP -->
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Handa sa talakayan, well prepared smiles always, may matututunan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabait, maunawain sa lahat ng pagkakataon, magaling makitungo sa mga estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Strikto, strikto pag dating sa deadline at pasahan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maganda ang paraan ng pagtuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Calm, organized and kind
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Good speaker
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Guide you in her lesson
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Seryosong mag turo, Laging nakapokus sa kanyang itinuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos na sinisimulan ang aming talakayan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Kahit magulo o maingay kami napapatahimik niya kami
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nag uumpisa sa pagpapasulat
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      On time pumasok
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malinaw mag salita
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mahinahon na guro
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Heart frame
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos sa sarili
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Magaling magturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maaga sa klase
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Katamtaman ang husay sa pagturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mahina ang boses
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Masungit tuwing nakakarinig ng ingay
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>
		      					</div>
		      					<!-- END -->
		      				</div>
		      				<!-- BUTTON END -->

		      				<!-- BUTTON START -->
		      				<div class="col-md-10 col-md-offset-1 mb-10" style="padding: 10px 10px; background-color: #d9dddc">
		      					<b>B. PANGANGASIWA SA ORAS AT KLASE</b>
		      					<a href="#list2" data-toggle="collapse" class="pull-right" onclick="changeArrow(this.id)">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list2" class="collapse col-md-10 col-md-offset-1">
		      					<!-- START 1-2 -->
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Hindi nalelate, Always on time, Always presemt
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      He/she is always prepared on her lesson, she explain her lesson well
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Kaagad ipinapakita ang resulta
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Reliable
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Time manageable
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Sobrang hilig sa surprise quiz
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Minsan late
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>

		      					  <!-- ENTREP -->
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nasa oras kung pumasok, maagang pumapasok, walang sinasayang na oras, always present
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Bago umpisahan ang klase kailangan maayos muna
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Bihirang malate
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagpasa ng gawain sa tamang oras
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Napapanatili ang disiplina ng bata, ma disiplina
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Masiyahin
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Ipinapaalam kaagad ang resulta ng pag susulit
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nagtuturo bago i announce ang score ng pagsusulit
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>
		      					</div>
		      					<!-- END -->
		      				</div>
		      				<!-- BUTTON END -->

		      				<!-- BUTTON START -->
		      				<div class="col-md-10 col-md-offset-1 mb-10" style="padding: 10px 10px; background-color: #d9dddc">
		      					<b>C. PAMAMARAAN NG PAGTUTURO</b>
		      					<a href="#list3" data-toggle="collapse" class="pull-right" onclick="changeArrow(this.id)">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list3" class="collapse col-md-10 col-md-offset-1">
		      					<!-- START 1-3 -->
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos magturo, well prepared
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Creative in teaching, active
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Hinihikayat niya ang lahat sumali, lagi kaming hinihikayat na makiisa
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Encourage the students in participating in our home room activities
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      She always ensures that his/her student learn something
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malinaw magsalita, malinaw magpaliwanag, nagpapaliwanag ng maayos at mahinahon
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Alam niya kung paano kami matuto base sa kanyang estilo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Lagi niyang tinatawag ang mga estudyanteng hindi nakikinig sakanya
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Ayaw ng may nasasayang na oras
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mahusay mamuno ngunit maikli ang pasensya
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>

		      					  <!-- ENTRP -->
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos magturo, handa sa pagtuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Magtuturo muna bago magpaseat work
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Epektibo siyang guro sa amin naiintindihan namin ang kanyang lesson
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos maglahad
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Ipinapaliwanag ang proyekto sa tamang oras
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Laging nagpapa-recite
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Gumagamit ng PPT
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      She always ask question to explain it well in class
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Bihirang magbigay ng proyekto
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Magaling manghikayat ng estudyante upang makilahok, hinihikayat ang lahat upang makilahok
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Sinasaway ang mga hindi nakikinig
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malinaw na nilalahad ang mga lessons
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mahusay magbigay ng impormasyon
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Gusto niya sa kanya lang ang atenson kapag nagtuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      hindi maintindihan minsan ang kaniyang mga sinasabi dahil mahina ang boses
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Boring ang klase
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Medyo mahirap ang klase
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>
		      					</div>
		      					<!-- END -->
		      				</div>
		      				<!-- BUTTON END -->

		      				<!-- BUTTON START -->
		      				<div class="col-md-10 col-md-offset-1 mb-10" style="padding: 10px 10px; background-color: #d9dddc">
		      					<b>D. WIKA SA PAGTUTURO</b>
		      					<a href="#list4" data-toggle="collapse" class="pull-right" onclick="changeArrow(this.id)">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list4" class="collapse col-md-10 col-md-offset-1">
		      					<!-- START 1-4 -->
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      May kusa sa pagtulong sa estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Dalubhasa sa wikang ginagamit, formal english language
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malakas ang boses madaling maintindihan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Ako ngayon ay may problema minsan hindi nakakapasok dahil walang pamasahe siya ay gumagawa ng paraan para ako'y matulungan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>

		      					  <!--- ENTREP -->
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      English is his/her medium
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Minsan tagalog kapag mag explain
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Walang kinikilingan
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabait sa estudyante kahit walang galang sakanya
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      May respeto sa estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nauunawaan po namin ang kanyang sinasabi
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabilis at malinaw siyang magturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Gumagamit ng PPT
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabilis magpaliwanag
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Medyo magulo magpaliwanag
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>
		      					</div>
		      					<!-- END -->
		      				</div>
		      				<!-- BUTTON END -->

		      				<!-- BUTTON START -->
		      				<div class="col-md-10 col-md-offset-1 mb-10" style="padding: 10px 10px; background-color: #d9dddc">
		      					<b>E. PAKIKITUNGO NG GURO SA ESTUDYANTE</b>
		      					<a href="#list5" data-toggle="collapse" class="pull-right" onclick="changeArrow(this.id)">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list5" class="collapse col-md-10 col-md-offset-1">
		      					<!-- START 1-5 -->
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nakikilahok siya sa amin sa mga laro
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Inaalam kung ano ang nangyayari sa school
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Lagi niyang kinukumusta ang mga estudyanteng may problema
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maganda ang pakikitungo niya lalo na sa mga estudyanteng hindi nakakapasok
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Humble, Careful
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Matulungin sa mga nangangailangan, may pakikisama
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Para na naming siyang magulang
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>

		      						<!-- ENTREP -->
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabait, maalalahanin, hindi istrikto, well mannered
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pantay pantay ang mga students, patas sa lahat ng gawain at mapagbigay
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malawak ang konsiderasyon, masaya sa klase
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Masipag
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Tinutulungan niya kami sa lahat ng bagay
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Laging nagbibigay ng advice sa amin
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Madaling i approach
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Tapat sa mga estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Hindi masyadong nakikipag interaksyon sa mga babae
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabuti ang pakikitungo sa bawat isa
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Kapag nagagalit siya kinukumpara niya kami sa ibang section
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Others
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <textarea></textarea>
		      					  </div>
		      					</div>
		      					<!-- END -->
		      				</div>
		      				<!-- BUTTON END -->

		      				<!-- BUTTON START -->
		      				<div class="col-md-10 col-md-offset-1 mb-10" style="padding: 10px 10px; background-color: #d9dddc">
		      					<b>F. KOMENTO AT SUHESTIYON</b>
		      					<a href="#list6" data-toggle="collapse" class="pull-right" onclick="changeArrow(this.id)">
		  							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill float-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  				  				<path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
		  							</svg>
		  						</a>
		      				</div>
		      				<div id="list6" class="collapse col-md-10 col-md-offset-1">
		      					<!-- START 1-5 -->
		      					<b>1. Anu-anong mga bagay na nararapat ipagpatuloy ng aking guro?</b>
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Teaching, kasipagan sa pagtuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Smile, pala ngiti, friendly
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Positibo na magagawa ng estudyante ang lahat
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Always kind
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malinaw at mahabang pasensya
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maayos magturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging matyaga sa pagtuturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Kung paano siya magturo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Malakas ang boses
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nakikipag komunikasyon sa mga estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Teaching style
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagsuporta sa amin
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Approachable
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging concern sa estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging matulungin na guro
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging jolly
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Madaling lapitan
		      					    </label>
		      					  </div>
		      					</div>
		      					<!-- END -->

		      					<!-- START 1-6 -->
		      					<b>2. Anu-anong mga bagay ang hindi na dapat ipagpatuloy ng aking guro?</b>
		      					<div class="form-group">
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Fast talking
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maraming pinapagawa
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mahina boses
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Puro pa activity
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Maikli oras na binibigay para sa activities
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging mataray
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging malambot
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Nagagalit sa maliliit na bagay
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging matampuhin
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Hindi pagiging strikto
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabilis magsalita
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Mabilis mag init ang ulo
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagpapalabas ng estudyante
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Minsang kawalan ng pake sa aming klase
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Prangka
		      					    </label>
		      					  </div>
		      					  <div class="checkbox">
		      					    <label>
		      					      <input type="checkbox">
		      					      Pagiging moody
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
<script type="text/javascript">
	function changeArrow(id) {
		$('.collapse').removeClass('in');
	}
</script>
</body>
</html>