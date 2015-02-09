<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--Main Wrapper of the system-->
<div id="wrapper" class="container" ng-app="app">
	<!--Middle container area of the site-->
	<div id="cont" class="col-md-9">
		<div ng-view></div>
	</div>
	<!--Right container area of the site-->
	<div ruid="right_menu" class="col-md-3" style="padding: 10px;position: relative;">
		<div id="rpanel" class="panel panel-default col-sm-12" style="position: fixed;">
			<div class="panel-heading">
				<h3 class="panel-title">Today Events</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">

<?php
if(count($events) == 0){
?>
						<div class="row">
							<div class="col-sm-12">
								<h5>No events Today</h5>
							</div>
						</div>
<?php

}else{
	foreach ($events as $event) {
?>
						<div class="row">
							<div class="col-sm-12">
								<h5>Date <?php echo $event->date;?>Time <?php echo $event->stime;?></h5>
								<h6 style="text-align: justify;">
									Address: <?php echo $event->address1." ".$event->address2?>
									<br/>
									Organization Name : <?php echo $event->orgName;?>
									<br/>
									<a>Read more</a>
								</h6>
							</div>
						</div>
<?php
	}
}
?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
