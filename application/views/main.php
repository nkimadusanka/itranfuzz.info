<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--Main Wrapper of the system-->
<div id="wrapper" class="container" ng-app="app">
	<!--Middle container area of the site-->
	<div id="cont" class="col-md-9">
		<div ng-view>
		</div>
	</div>
	<!--Right container area of the site-->
	<div id="right_menu" class="col-md-3">
	</div>
</div>
