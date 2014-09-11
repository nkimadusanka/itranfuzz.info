<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php
	//loading footer in user welcome page
	if($this->session->userdata('validated') == false){
?>
		<footer id="footer">
		  <div class="container-fluid">
		    <div class="row">    
		      <div class="col-xs-6 col-sm-6 col-md-3 column">          
		          <h4>Information</h4>
		          <ul class="nav">
		            <li><a href="about-us.html">Products</a></li>
		            <li><a href="about-us.html">Services</a></li>
		            <li><a href="about-us.html">Benefits</a></li>
		            <li><a href="elements.html">Developers</a></li>
		          </ul> 
		        </div>
		      <div class="col-xs-6 col-md-3 column">          
		          <h4>Follow Us</h4>
		          <ul class="nav">
		            <li><a href="#">Twitter</a></li>
		            <li><a href="#">Facebook</a></li>
		            <li><a href="#">Google+</a></li>
		            <li><a href="#">Pinterest</a></li>
		          </ul> 
		      </div>
		      <div class="col-xs-6 col-md-3 column">          
		          <h4>Contact Us</h4>
		          <ul class="nav">
		            <li><a href="#">Email</a></li>
		            <li><a href="#">Headquarters</a></li>
		            <li><a href="#">Management</a></li>
		            <li><a href="#">Support</a></li>
		          </ul> 
		      </div>
		      <div class="col-xs-6 col-md-3 column">          
		          <h4>Customer Service</h4>
		          <ul class="nav">
		            <li><a href="#">About Us</a></li>
		            <li><a href="#">Delivery Information</a></li>
		            <li><a href="#">Privacy Policy</a></li>
		            <li><a href="#">Terms &amp; Conditions</a></li>
		          </ul> 
		      </div>
		    </div><!--/row-->
		  </div>
		</footer>
<?php
//End of user welcome footer
}
?>
		<!-- load api scripts here-->
		<script type="text/javascript" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcRW4qdkVn49iIVJsjuATIdY4z05WJn1k"></script>
		<!--Add all javascript lib in here-->
		<script type="text/javascript" src="<?php echo base_url() ?>js/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap/bootstrapValidator.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>js/anjular/angular.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>js/anjular/angular-route.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>js/anjular/app.js"></script>
<? if($this->session->userdata('validated') == false){ ?>
		<!--smooth  scolling methods-->
		<script type="text/javascript" src="<?php echo base_url() ?>js/smooth_scrolling.js"></script>
<? }?>
		<script type="text/javascript" src="<?php echo base_url() ?>js/map.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
	</body>
</html>