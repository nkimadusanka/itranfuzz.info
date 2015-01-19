<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="row" style="padding: 10px;" ng-controller="mainController">
	<div class="col-md-6">
		<div class="panel panel-primary">
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
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/event.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-8 col-sm-offset-1">
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
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Upcomming Events</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">

<?php
if(count($uevents) == 0){
?>
						<div class="row">
							<div class="col-sm-12">
								<h5>No events in upcomming</h5>
							</div>
						</div>
<?php
}else{
	foreach ($uevents as $event) {
?>
						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/event.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-8 col-sm-offset-1">
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
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Today Events</h3>
			</div>
			<div class="panel-body" style="padding: 0px;">
				<div id="map-canvas" style="height: 600px; width: 100%;"/>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="row" style="padding: 10px;">
	<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Past Events</h3>
			</div>
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">

<?php
if(count($pevents) == 0){
?>
						<div class="row">
							<div class="col-sm-12">
								<h5>No events in upcomming</h5>
							</div>
						</div>
<?php
}else{
	foreach ($pevents as $event) {
?>

						<div class="row">
							<div class="col-sm-2">
								<img src="<?php echo base_url()?>icons/event.png"
									style="height: 60px; width: 60px;">
							</div>
							<div class="col-sm-10">
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