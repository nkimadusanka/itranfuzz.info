<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!--Main Wrapper of the system-->
<div id="wrapper" class="row" ng-app="app">
	<!--Left navigation containt area of the site-->
	<div id="left_menu" class="col-md-2">
		<?php echo $leftnav;?>
	</div>
	<!--Middle container area of the site-->
	<div id="cont" class="col-md-6">
		<div ng-view>
		</div>
	</div>
	<!--Right container area of the site-->
	<div id="right_menu" class="col-md-3">
	</div>
</div>
