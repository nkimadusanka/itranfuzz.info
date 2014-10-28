<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- Creating full screen blocks for welcome screen-->
	<section class="container-fluid" id="section1">
	  	<h1 class="text-center v-center"><i>iTransfussion.lk</i></h1>
	  	<!--Login form initializing button-->
	  	<p class = "text-center v-center">
	  		<button type="button" class="btn btn-lg" style="color:white;" data-toggle="modal" data-target="#loginModel">Login</button>
	  		<a type="button" class="btn btn-lg" style="color:white;" href="#section4">Register ToDay</a>
	  	</p>
	</section>

	<section class="container-fluid" id="section2">
	  <div class="row">
	  	<div class="col-sm-8 col-sm-offset-2 text-center">
	        <h1>What is iTranfuzz mobile app?</h1>
	        <br>
			<p class="lead">One can download iTranfuzz  Android app from the Google Play Store or register with iTranfuzz.info  to join the network. Once a request is placed, iTranfuzz  runs algorithms to match potential donors based on location and blood group and notifies only them...</p>
	        <br> 
	      	<img src="<?php echo base_url()?>icons/mobile_real.png" class="img-responsive center-block">
	    </div>
	  </div>
	</section>

	<section class="container-fluid" id="section3">
		<h1 class="text-center">What is blood donation?</h1>
	    <div class="row">
	      <div class="col-sm-6 col-sm-offset-3">
	        <p class="text-center lead">Blood donation is giving some of your blood so that it can be used to help someone else. Donated blood helps people who have lost blood in an accident or who have an illness such as cancer, anemia, sickle cell disease, or hemophilia.
Donated blood includes red blood cells and the other things that make up the blood, such as platelets and plasma. Blood that contains all the parts is called whole blood.
You may be able to donate during blood drives at your workplace.
About 1 pint (480 mL) of blood is taken when you donate. It takes about 10 minutes. The whole process—including answering questions and having a short exam—takes up to an hour.
Donated blood is tested to make sure that it is safe to use. It's also checked for its type. This makes sure that the person who needs blood gets the right type.
</p>
	        <div class="row">
	          <div class="col-xs-6">To donate blood, you must:
	          	<ul>
</br>	<li>Be at least 18 years old.</li> 
</br>	<li>Weigh at least 110 lb (50 kg).</li>
</br>	<li>Be in good health.</li>
</ul>
</div>
 			<div class="row">
	          <div class="col-xs-6 ">What should you do BEFORE you give blood:
	          	<ul>
</br><li>	Make sure you feel good.</li>
</br><li>Eat a good breakfast or lunch. But avoid fatty foods.They can affect some of the tests done on donated blood to make sure it's safe.</li> 
</br><li>Drink plenty of fluids.</li>
</br><li>Get plenty of sleep the night before.</li>
</ul>
</div>
</div>
	        </div>
	        <p class="text-center">
	        	<img src="<?php echo base_url()?>icons/tablet.png" class="img-responsive center-block">
	        </p>
	      </div>
	   </div>
	</section>

	<section class="container-fluid" id="section4">
		<h2 class="text-center">Register Now</h2>
	    <div class="row">
	      <div class="col-sm-8 col-sm-offset-2">
            <!--Registration form here-->
            <?php echo $register_form?>
	      </div>
	    </div>
	</section>
	<section class="container-fluid" id="section5">
		<h1 class="text-center">Do you know? </h1>
	    <div class="row">
	      <div class="col-sm-6 col-sm-offset-3">
	        <p class="text-center lead">Only
<font color="red">4%</font>
of adults are currently donors...</p>
	        <div class="row">
	          <div class="col-xs-6"><h4>Each blood donation can help as many as
3 people</h4></div>
	          <div class="col-xs-6 text-right"><h4>100 donations equates to 
47 litres of blood</h4></div>
	        </div>
	        <p class="text-center">
	          <img src="<?php echo base_url()?>icons/sri_lanka.png" class="img-responsive center-block ">
	        </p>
	      </div>
	   </div>
	</section>
<!--end of the selection divs-->
<!--end of the selection divs-->

