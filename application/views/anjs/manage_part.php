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
			<a class="list-group-item" ng-repeat="part in parts">
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


<!-- Large Message for update cluster modal -->
<div class="modal fade event-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">Update Cluster Details</h4>
				</div>
				<div id="lContent" class="modal-body">
					<!--registration form to be submitted to the website-->
					<form id="updateFormCluster" method="post"
						action="center_controller/updatecenter" ng-controller="clusterController">
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Province</label>
								<div class="col-md-6 selectContainer">
									<select class="form-control" ng-model="province" name="province">
										<option value="">Select Province</option>
										<option value="cp">Central Province</option>
										<option value="ep">Eastern Province</option>
										<option value="ncp">North Central Province</option>
										<option value="np">Northern Province</option>
										<option value="nwp">North Western Province</option>
										<option value="sabp">Sabaragamuwa Province</option>
										<option value="sp">Southern Province</option>
										<option value="up">Uva Province</option>
										<option value="wp">Western Province</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Address1 </label>
								<div class="col-md-10">
									<input type="text" ng-model="address1" class="form-control" name="address1" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Address2 </label>
								<div class="col-md-10">
									<input type="text" ng-model="address2" class="form-control" name="address2" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Phone </label>
								<div class="col-md-6">
									<input type="text" ng-model="phone" class="form-control" name="phone" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Type</label>
								<div class="col-md-6 selectContainer">
									<select class="form-control" name="ctype" ng-model="type">
										<option value="">Select type</option>
										<option value="c">Collecting</option>
										<option value="s">Storing</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-md-2 control-label">Select Location</label>
								<div class="col-md-10">
					                <div id="map-canvas" style="height: 200px; width: 100%;"/>
					            </div>
							</div>
						</div>
						<!-- sending cid to server-->
						<div class="form-group">
							<div class="row">
								<input style="display:none;" type="text" ng-model="cId" name="cId" />
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
						<button type="submit" class="btn btn-default" form="updateFormCluster">Update</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!--  end of update cluster model -->
</div>




