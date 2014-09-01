<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<!--Programm title stuff-->
		<title></title>
		<link rel="icon" href="<?php echo base_url(); ?>favicon.ico" type="image/gif">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrapValidator.min.css"/>
		<!-- my styles -->
		<link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url()?>css/qmedia/mediaq.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    	<!--[if lt IE 9]>
      		<script src="assets/js/html5shiv.js"></script>
      		<script src="assets/js/respond.min.js"></script>
    	<![endif]-->
	</head>
	<body>
		<!-- navigational header-->
		<nav id = "navheader" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!--This is responsive mobile menu-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>">
					<img src="<?php echo base_url() ?>icons/log50.png" style="float:left">
					<h2 id="sitename">iTranfussion.lk</h2>
				</a>
			</div>
			<!--This is nav main menu-->
			<div class="collapse navbar-collapse" id="example-navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
<?php
	if($this->session->userdata('validated') == false){
?>
					<!-- add navigations here-->
					<li><a href="#section1">Home</a></li>
					<li><a href="#section2">How to contribute</a></li>
					<li><a href="#section3">Download</a></li>
					<li><a href="#section4">Mission</a></li>
					<li><a href="#section5">About</a></li>
<?php }
	else{
?>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Settings</a></li>
					<li id="profilemgr" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding:0px">
							<img id="profileimg" class="img-rounded" src="<?php echo base_url()?>icons/defualt/defualt_profile.gif?>"/>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">jmeter</a></li>
							<li><a href="#">EJB</a></li>
							<li><a href="#">Jasper Report</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo base_url()?>welcome/do_logout">Logout</a></li>
						</ul>
					</li>
				<?}?></ul>
<!--searching menu bar if session avialabile-->
<?php
	if($this->session->userdata('validated') == true){
?>
				<form class="navbar-form navbar-left" role="search">
					<div class="input-group">
						<input id="searchbar" type="text" class="form-control" placeholder="Search here">
						<span class="input-group-btn">
							<button id="searchbutton" class="btn glyphicon glyphicon-search" type="button">
							</button>
						</span>
					</div><!-- /input-group -->
				</form>
				<?php }?></div>
		</nav>
		<!-- End of naviagtion bar-->
