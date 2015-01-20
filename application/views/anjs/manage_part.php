<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div ng-controller="magPartation" style="margin:5px;">
	<div class = "row">
		<div class="col-md-12">
			<h1>Manage Participation<small>Manage participation of event</small></h1>
		</div>
	</div>
	<br />
	<div class = "row">
		<div class = "col-md-3">
			<img src="<?php echo base_url()?>icons/event_100.png">
		</div>
		<div class = "col-md-9">
			<div class="row">
				<div class="col-md-6">
					Orgranizer:<span id="orgName"></span>
				</div>
				<div class="col-md-6">
					Location:<span id="address1"> </span><span id="address2"> </span>
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-md-6">
					Date:<span id="date"></span>
				</div>
				<div class="col-md-6">
					Time:<span id="stime"></span>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-12">
					Add new: <button type="button" class="btn btn-sm" ng-click="addPart()"> Add New participate</button>
				</div>
			</div>
			<hr/>
		</div>
	</div>
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="part in parts"
			bn-log-dom-creation>
				<div class = "row"> 
					<div class = "col-sm-8">
						<img class="pull-left" style="width:60px;height:60px;" src="<?php echo base_url()?>icons/defualt/part.png">
						<h4 class="list-group-item-heading"></h4>
						<p class="list-group-item-text"><span><b>  Name :</b>{{part.fname}} {{part.lname}}</span></p>
						<p class="list-group-item-text"><span><b>  Address :</b>{{part.address1}} {{part.address2}}</span></p>
						<p class="list-group-item-text"><span><b>  Email :</b><span>{{part.email}} </span></p>
					</div>
					<div class = "col-sm-4">
						<div class = "row">
							<div class = "col-md-offset-8">
								<button type="button" class="btn btn-sm" ng-click="partDelete(part.donor_dId,part.event_evId)">
									Delete <i class="fa fa-undo"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>

<!--select event model-->
<div class="modal fade eventselect-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">Select Event</h4>
				</div>
				<div id="lContent" class="modal-body">
				<div class="row">
					<div class="col-md-3">
						Select Event
					</div>
					<div class="col-md-9">
						<select id="selectEvent" class="form-control">
						    <option value="{{event.mseId}}" ng-repeat="event in events">{{event.orgName}}<span> </span>{{event.address2}} <span> </span> {{event.date}}</option>
						</select>
					</div>
				</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" ng-click="selectEvent()" data-dismiss="modal">Ok</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!-- End of select event model-->

<!--select add part model-->
<div class="modal fade addpart-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">Add Participante</h4>
				</div>
				<div id="lContent" class="modal-body">
					<form id="addPartForm" method="post"
	action="part_controller/addpart">
						<div class="form-group">
							<div class="row">
								<div class="col-md-5">
									Select Donor By Email:
								</div>
								<div class="col-md-7">
									<input id="email" type="text" class="form-control" name="email" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-5">
									Select Donation Method:
								</div>
								<div class="col-md-7">
									<select id="donation_method_dmId" name="donation_method_dmId" class="form-control">
									    <option value="{{method.dmId}}" ng-repeat="method in methods">{{method.description}}</option>
									</select>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-default" form="addPartForm">Save</button>
					<button type="reset" class="btn btn-default" form="addPartForm">Cancel</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!-- End of add part model-->
</div>




