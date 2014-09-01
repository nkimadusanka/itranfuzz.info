<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!--Main Wrapper of the system-->
<div id="wrapper" class="row" ng-app="app">
	<!--Middle container area of the site-->
	<div id="cont" class="col-md-8 col-md-offset-2">
		<div ng-view>
		</div>
	</div>
	<!--Right container area of the site-->
	<div id="right_menu" class="col-md-2">
	</div>
</div>
