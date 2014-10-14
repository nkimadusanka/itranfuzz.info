<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<br />
<div ng-controller="staff_table">
	<div class = "row">
		<div class = "col-md-3">
			Search
		</div>
		<div class = "col-md-9">
			<input type="text" class="form-control" ng-model = "fname"/>
		</div>
	</div>
	<br />
	<div class = "row">
		<div class = "col-md-3">
			Search By
		</div class = "col-md-9">
		
		<div>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="employee in employees">
				<div class = "row"> 
					<div class = "col-md-9">
						<img class="pull-left" src="<?php echo base_url()?>icons/defualt/{{employee.type = 'a' ? 'defualt_admin.png' : 'defualt_staff.png'}}">
						<h4 class="list-group-item-heading"> Name:{{employee.fname}} {{employee.lname}} Phone:{{employee.phone}}</h4>
						<p class="list-group-item-text">Gender: {{employee.gender == "m" ? "Male" : "Female"}} Type: {{employee.type == 'a' ? "Administrator" : "Staff" }}</p>
					</div>
					<div class = "col-md-3">
						<div class = "row">
							<div class = "col-md-6">
								<button type="button" class="btn btn-sm" ng-click="viewstaff(employee.eId)">
									View <i class="fa fa-info"></i>
								</button>
							</div>
							<div class = "col-md-6">
								<button type="button" class="btn btn-sm" ng-click="updatecenter(center.cId)">
									Update <i class="fa fa-undo"></i>
								</button>
							</div>
						</div>
						<div class = "row">
							<div class = "col-md-offset-7" style="margin-top: 5px;">
								<button type="button" class="btn btn-sm" ng-click="removecenter(center.cId)">
									Remove <i class="fa fa-times-circle"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
	
<!-- Large Message for view Staff -->
<div class="modal fade sfaffview-msg-model" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 id="lTitle" class="modal-title">View Staff Details</h4>
				</div>
				<div id="lContent" class="modal-body">
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
							<h5>Address</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{address1}} {{address2}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Gender</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{employee.gender == "m" ? "Male" : "Female"}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Phone</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{phone}}</h5>
						</div>
					</div>
					<div class="row">
						<div class = "col-offset-md-1 col-md-4">
							<h5>Type</h5>
						</div>
						<div class = "col-md-8">
							<h5>{{type}}</h5>
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
<!-- End of view staff model-->