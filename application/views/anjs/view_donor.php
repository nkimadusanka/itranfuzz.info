<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<br />
<div ng-controller="donor_table">

	<div class = "row">
		<div class="col-md-12">
			<h1>Manage Donor<small> Manage donor details</small></h1>
		</div>
	</div>
	<hr/>
	<div class = "row">
		<div class = "col-md-2">
			Search Donor
		</div>
		<div class = "col-md-4">
			<input type="text" class="form-control" ng-model = "email"/>
		</div>
		<div class = "col-md-2">
			Blood Type
		</div>
		<div class = "col-md-4">
			<select class="form-control" ng-model = "bType">
				<option value="">Blood type</option>
				<option value='ap'>A+</option>
				<option value='am'>A-</option>
				<option value='bp'>B+</option>
				<option value='bm'>B-</option>
				<option value='abp'>AB+</option>
				<option value='abm'>AB-</option>
				<option value='op'>O+</option>
				<option value='om'>O-</option>
			</select>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="donor in donors | filter: bType |filter: email">
				<div class = "row"> 
					<div class = "col-md-9">
						<img class="pull-left" src="<?php echo base_url()?>icons/defualt/donor_64.png">
						<h4 class="list-group-item-heading"><b>Name </b>{{ donor.fname }} {{donor.lname}}<b> Email: </b>{{donor.email}}</h4>
						<p class="list-group-item-text"><b>Address :</b> {{donor.address1}} {{donor.address2}} <b> Phone:</b>{{donor.phone}}</p>
					</div>
					<div class = "col-md-3">
						<div class = "row">
							<div class = "col-md-6">
								<button type="button" class="btn btn-sm" ng-click="viewdonor(donor.dId)">
									View <i class="fa fa-info"></i>
								</button>
							</div>
<?php if($this->session->userdata('user_Mode') == 'a' || $this->session->userdata('user_Mode') == 'as' || $this->session->userdata('user_Mode') == 's'){?> 							
							<div class = "col-md-6">
								<button style="width:80px;" type="button" class="btn btn-sm" ng-click="updatedonor(donor.dId)">
									Update <i class="fa fa-undo"></i>
								</button>
							</div>
<?php }?>							
						</div>
						<div class = "row">
							<div class = "col-md-offset-7" style="margin-top: 5px;">
<?php if($this->session->userdata('user_Mode') == 'a' || $this->session->userdata('user_Mode') == 'as' || $this->session->userdata('user_Mode') == 's'){?> 														
								<button style="width:80px;" type="button" class="btn btn-sm" ng-click="removedonor(donor.dId)">
									Remove <i class="fa fa-times-circle"></i>
								</button>
<?php }?>								
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>

<!-- Large Message for view modal -->
<div class="modal fade donorview-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">View Donor Details</h4>
				</div>
				<div id="lContent" class="modal-body">
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Email</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{email}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>nic</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{nic}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Name</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{fname}} {{lname}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Gender</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{gender}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>DOB</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{dob}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Blood Type</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{bType}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-md-12">
							<div id="map-canvas" style="height: 200px; width: 100%;"/>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
</div>
<!-- End of view cluster model-->
<!-- Large Message for update cluster modal -->
<div class="modal fade clustupdate-msg-model" tabindex="-1" role="dialog"
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
						action="privateapi/addCenter" ng-controller="clusterController">
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
</div>


