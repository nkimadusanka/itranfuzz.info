<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!doctype html>
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
		<!-- Custom Fonts -->
    	<link href="<?php echo base_url()?>fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">iTranfussion.lk</a>
            </div>
            <!-- Top Menu Items -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-left top-nav">
<?php
    if($this->session->userdata('validated') == true){
?>
                <!--searching menu bar if session avialabile-->
                <form id="searchHead" class="navbar-form navbar-left" role="search">
                    <div class="input-group">
                        <input id="searchbar" type="text" class="form-control" placeholder="Search here">
                        <span class="input-group-btn">
                            <button id="searchbutton" class="btn glyphicon glyphicon-search" type="button">
                            </button>
                        </span>
                    </div><!-- /input-group -->
                </form>
                <!--alert menu drop down-->
<?php }?>
            </ul>
            <ul class="nav navbar-right top-nav">

<?php
	if($this->session->userdata('validated') == false){
?>
					<!-- add navigations here-->
					<ul class="nav navbar-nav">
						<li><a href="#section1">Home</a></li>
						<li><a href="#section2">How to contribute</a></li>
						<li><a href="#section3">Download</a></li>
						<li><a href="#section4">Mission</a></li>
						<li><a href="#section5">About</a></li>
					</ul>
<?php
}
else
{
	?>
                <!-- profile management drop down-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img id="profileimg" class="img" src="<?php echo base_url()?>icons/defualt/defualt_profile_20.jpg?>"/> 
                        <?php
                            echo $this->session->userdata('lname');
                        ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="text-center">Login as
                            <?php
                                if($this->session->userdata('user_Mode') == 'a')
                                    echo "Administrator";
                                else if($this->session->userdata('user_Mode') == 'as')
                                    echo "staff Administrator";
                                else if($this->session->userdata('user_Mode') == 's')
                                    echo "staff";
                                else if($this->session->userdata('user_Mode') == 'd')
                                    echo "Donor";
                            ?>
                            </p>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url()?>welcome/do_logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!--end of profile manage ment drop down-->
            </ul>
            <!--/////////////////// dorp down items are over -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
<?php if($this->session->userdata('user_Mode') == 'a'){?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#mgclus"><i class="fa fa-fw fa-h-square"></i> Manage Cluster<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="mgclus" class="collapse">
                            <li>
                                <a href="#/add_cluster">Add Cluster</a>
                            </li>
                            <li>
                                <a href="#/view_cluster">View Cluster</a>
                            </li>
                        </ul>
                    </li>
<?php }?>
<?php if($this->session->userdata('user_Mode') == 'a' || $this->session->userdata('user_Mode') == 'as'){?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#mgclusst"><i class="fa fa-fw fa-stethoscope"></i> Manage Cluster Staff<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="mgclusst" class="collapse">
                            <li>
                                <a href="#add_staff">Add Staff</a>
                            </li>
                            <li>
                                <a href="#view_staff">View Staff</a>
                            </li>
                        </ul>
                    </li>
<?php }?>

<?php if($this->session->userdata('user_Mode') == 'a' || $this->session->userdata('user_Mode') == 'as'){?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#mgevent"><i class="fa fa-fw fa-calendar"></i> Manage Event<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="mgevent" class="collapse">
                            <li>
                                <a href="#add_event">Add Event</a>
                            </li>
                            <li>
                                <a href="#blood_request">Blood Request</a>
                            </li>
                            <li>
                                <a href="#method_registration">Donation Methods</a>
                            </li>
                            <li>
                                <a href="#view_events">View Events</a>
                            </li>
                        </ul>
                    </li>

<?php }?>

<?php if($this->session->userdata('user_Mode') == 'a' || $this->session->userdata('user_Mode') == 'as' || $this->session->userdata('user_Mode') == 's'){?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#part"><i class="fa fa-fw fa-users"></i>Participation<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="part" class="collapse">
                            <li>
                                <a href="#mang_part">Manage Participate</a>
                            </li>
                            <li>
                                <a href="#view_part">View Participate</a>
                            </li>
                        </ul>
                    </li>
<?php }?>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#mgdonor"><i class="fa fa-fw fa-wheelchair"></i> Manage Donor<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="mgdonor" class="collapse">
<?php if($this->session->userdata('user_Mode') == 'a' || $this->session->userdata('user_Mode') == 'as' || $this->session->userdata('user_Mode') == 's'){?>                        
                            <li>
                                <a href="#add_donor">Add Donor</a>
                            </li>
<?php }?>                            
                            <li>
                                <a href="#view_donor">View Donor</a>
                            </li>
<?php if($this->session->userdata('user_Mode') == 'd'){?>
                            <li>
                                 <a href="#view_hist">History</a>
                            </li>
<?php }?>
                        </ul>
                    </li>
                </ul>
            <!-- /.navbar-collapse -->
            </div>
<?php }?>
        </nav>
<!-- End of naviagtion bar-->
        
<!-- Large Message modal -->
<div class="modal fade larg-msg-model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    	<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
       				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 id="lTitle" class="modal-title"></h4>
      			</div>
      			<div id="lContent" class="modal-body">
      				<!-- this is large model body -->
      			</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
		      </div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
  </div>
</div>

<!-- Small Message modal -->
<div class="modal fade small-msg-model" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header">
       				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        			<h4 id = "sTitle" class="modal-title center-block"></h4>
      			</div>
      			<div id = "sContent" class="modal-body">
      				<!-- this is small model body -->
      			</div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
		      </div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
  </div>
</div>

        
