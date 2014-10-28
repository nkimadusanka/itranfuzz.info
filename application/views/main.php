<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--Main Wrapper of the system-->
<div id="wrapper" class="container" ng-app="app">
	<!--Middle container area of the site-->
	<div id="cont" class="col-md-9">
		<div ng-view></div>
	</div>
	<!--Right container area of the site-->
	<div ruid="right_menu" class="col-md-3" style="padding: 10px;position: relative;">
		<div class="panel panel-default" style="position: fixed;">
			<div class="panel-heading">
				<h3 class="panel-title">Today Events</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<h5>Date 2014/10/24 Time 8:00 AM</h5>
								<h6 style="text-align: justify;">
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
									scelerisque ante sollicitudin commodo. Cras purus odio,
									vestibulum in.<a>Read more</a>
								</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5>Date 2014/10/24 Time 8:00 AM</h5>
								<h6 style="text-align: justify;">
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
									scelerisque ante sollicitudin commodo. Cras purus odio,
									vestibulum in.<a>Read more</a>
								</h6>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5>Date 2014/10/24 Time 8:00 AM</h5>
								<h6 style="text-align: justify;">
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
									scelerisque ante sollicitudin commodo. Cras purus odio,
									vestibulum in.<a>Read more</a>
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
