<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<!-- Creating full screen blocks for welcome screen-->
	<section class="container-fluid" id="section1">
	  	<h1 class="text-center v-center"><i>iTransfussion.lk</i></h1>
	  	<!--Login form initializing button-->
	  	<p class = "text-center v-center">
	  		<button type="button" class="btn btn-lg" style="color:white;" data-toggle="modal" data-target="#loginModel">Login</button>
	  		<a type="button" class="btn btn-lg" style="color:white;" href="#section4">Get Start Now</a>
	  	</p>
	  	<div class="row">
	    	<div class="col-sm-4">
	          <div class="row">
	          	<div class="col-sm-10 col-sm-offset-2 text-center">
	          		<h3>Robust</h3>
	          			<img src="<?php echo base_url()?>icons/tablet.png" class="img-responsive center-block" style="height:200px;width:200px;">
	          		<p>There is other content and snippets of details or features that can be placed here..</p><i class="fa fa-cog fa-5x"></i></div>
	          </div>
	    	</div>
	        <div class="col-sm-4 text-center">
	          <div class="row">
	          	<div class="col-sm-10 col-sm-offset-1 text-center"><h3>Simple</h3><p>You may also want to create content that compells users to scroll down more..</p><i class="fa fa-user fa-5x"></i></div>
	          </div>
	    	</div>
	        <div class="col-sm-4 text-center">
	          <div class="row">
	          	<div class="col-sm-10 text-center"><h3>Clean</h3><p>In the first 30 seconds of a user's visit to your site they decide if they're going to stay..</p><i class="fa fa-mobile fa-5x"></i></div>
	          </div>
	    	</div>
	  	</div>
	</section>

	<section class="container-fluid" id="section2">
	  <div class="row">
	  	<div class="col-sm-8 col-sm-offset-2 text-center">
	        <h1>What is Bootstrap?</h1>
	        <br>
			<p class="lead">Bootstrap is a free collection of tools for creating websites and web applications. It contains HTML and CSS-based design templates for typography, forms, buttons, navigation and other interface components, as well as optional JavaScript extensions. It is the No.1 project on GitHub with 65,000+ stars and 23,800 forks (as of March 2014) [1] and has been used by NASA and MSNBC, among many others..</p>
	        <br> 
	      	<i style="font-size:120px" class="fa fa-camera fa-5x"></i>
	      	<p>Big 'ol Camera Icon</p>
	    </div>
	  </div>
	</section>

	<section class="container-fluid" id="section3">
		<h1 class="text-center">Bootstrap is Responsive</h1>
	    <div class="row">
	      <div class="col-sm-6 col-sm-offset-3">
	        <p class="text-center lead">Vertical scrolling has become a popular and lasting trend in Web design. The question becomes, is it here to stay?</p>
	        <div class="row">
	          <div class="col-xs-6">Some brand-tacular designs even have home page content that is taller that 12,000 pixels. That's a lotta content.</div>
	          <div class="col-xs-6 text-right">Anyhoo, this is just some random blurb of text, and Bootply.com is a playground and code editor for Bootstrap.</div>
	        </div>
	        <p class="text-center">
	          <img src="assets/img_mtnpeople.png" class="img-responsive center-block ">
	        </p>
	      </div>
	   </div>
	</section>

	<section class="container-fluid" id="section4">
		<h2 class="text-center">Register Now</h2>
	    <div class="row">
	      <div class="col-sm-8 col-sm-offset-2">



<!--registration form to be submitted to the website-->
<form id="regForm" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Email</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div class="col-md-6">
                <label class="control-label">User Avator</label>
                <img src="<?php echo base_url()?>icons/defualt/defualt_profile_20.jpg?>" class="img-rounded">
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">First Name</label>
                <input type="text" class="form-control" name="fname" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Last Name</label>
                <input type="text" class="form-control" name="lname" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Address 1</label>
                <input type="text" class="form-control" name="address1" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Address 2</label>
                <input type="text" class="form-control" name="address2" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Password</label>
                <input type="text" class="form-control" name="password" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Re Enter Password</label>
                <input type="text" class="form-control" name="rpassword" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
        	<div class="col-md-4 selectContainer">
                <label class="control-label">Gender</label>
                <select class="form-control" name="sex">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label">Date of Birth</label>
                <input type="text" class="form-control" name="dob" />
            </div>
            <div class="col-md-4 selectContainer">
                <label class="control-label">Blood Type</label>
                <select class="form-control" name="bType">
                    <option value="">Choose your blood type</option>
                    <option value="action">A+</option>
                    <option value="comedy">B+</option>
                    <option value="horror">A-</option>
                    <option value="romance">B-</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <label class="control-label">Re Enter Password</label>
                <div id="map-canvas" style="height: 200px;width: 500px;"/>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-default">Validate</button>
</form>




	      </div>
	    </div>
	</section>
	<section class="container-fluid" id="section5">
		<h1 class="text-center">Bootstrap is Responsive</h1>
	    <div class="row">
	      <div class="col-sm-6 col-sm-offset-3">
	        <p class="text-center lead">Vertical scrolling has become a popular and lasting trend in Web design. The question becomes, is it here to stay?</p>
	        <div class="row">
	          <div class="col-xs-6">Some brand-tacular designs even have home page content that is taller that 12,000 pixels. That's a lotta content.</div>
	          <div class="col-xs-6 text-right">Anyhoo, this is just some random blurb of text, and Bootply.com is a playground and code editor for Bootstrap.</div>
	        </div>
	        <p class="text-center">
	          <img src="assets/img_mtnpeople.png" class="img-responsive center-block ">
	        </p>
	      </div>
	   </div>
	</section>