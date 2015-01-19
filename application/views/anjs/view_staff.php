<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<br />
<div ng-controller="staff_table">
	<div class = "row">
		<div class="col-md-12">
			<h1>Manage Center Staff<small> Manage blood center staff</small></h1>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-md-3">Search By Name </div>
		<div class="col-md-9">
			<input type="text" class="form-control" ng-model="fname" />
		</div>
	</div>
	<br />
	<br />
	<div class="row">
		<div class="div_scroll list-group col-md-12">
			<a class="list-group-item" ng-repeat="employee in employees">
				<div class="row">
					<div class="col-md-9">
						<img class="pull-left"
							src="<?php echo base_url()?>icons/defualt/{{employee.type = 'a' ? 'defualt_admin.png' : 'defualt_staff.png'}}">
						<h4 class="list-group-item-heading">Name:{{employee.fname}}
							{{employee.lname}} Phone:{{employee.phone}}</h4>
						<p class="list-group-item-text">Gender: {{employee.gender == "m" ?
							"Male" : "Female"}} Type: {{employee.type == 'a' ?
							"Administrator" : "Staff" }}</p>
					</div>
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-6">
								<button type="button" class="btn btn-sm"
									ng-click="viewstaff(employee.eId)">
									<span> View </span><i class="fa fa-info"></i>
								</button>
							</div>
							<div class="col-md-6">
								<button style="width:80px;" type="button" class="btn btn-sm"
									ng-click="updatestaff(employee.eId)">
									<span> Update </span><i class="fa fa-undo"></i>
								</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-7" style="margin-top: 5px;">
								<button style="width:80px;" type="button" class="btn btn-sm"
									ng-click="removestaff(employee.eId)">
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
							<div class="col-md-offset-3">
								<img style="height: 200px; margin-left: 30px;" src="<?php echo base_url()?>icons/defualt/photo_select.png" />
							</div>
						</div>
						<div class="row">
							<div class="col-offset-md-1 col-md-4">
								<h5><b>Name</b></h5>
							</div>
							<div class="col-md-8">
								<h5>: {{fname}} {{lname}}</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-offset-md-1 col-md-4">
								<h5><b>Address</b></h5>
							</div>
							<div class="col-md-8">
								<h5>: {{address1}} {{address2}}</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-offset-md-1 col-md-4">
								<h5><b>Gender</b></h5>
							</div>
							<div class="col-md-8">
								<h5>: {{employee.gender == "m" ? "Male" : "Female"}}</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-offset-md-1 col-md-4">
								<h5><b>Phone</b></h5>
							</div>
							<div class="col-md-8">
								<h5>: {{phone}}</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-offset-md-1 col-md-4">
								<h5><b>Type</b></h5>
							</div>
							<div class="col-md-8">
								<h5>: {{type}}</h5>
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
	<!-- Large Message for update staff modal -->
	<div class="modal fade staffupdate-msg-model" tabindex="-1"
		role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 id="lTitle" class="modal-title">Update Staff Details</h4>
					</div>
					<div id="lContent" class="modal-body">
						<!--registration form to be submitted to the website-->
						<form id="updateFormStaff" method="post" action="employee_controller/addEmployee"
							ng-controller="staffController">
							<div class="form-group">
								<div class="row">
									<div class="col-md-offset-5">
										<label class="control-label"><span>Profile Picture</span></label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-offset-3">
										<img style="height: 200px; margin-left: 30px;"
											src="<?php echo base_url()?>icons/defualt/photo_select.png" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label">Email</label> <input type="text"
											class="form-control" name="email" value="{{email}}" />
									</div>
									<div class="col-md-6">
										<label class="control-label">NIC</label> <input type="text"
											class="form-control" name="nic" value = "{{nic}}"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label">First Name</label> <input
											type="text" class="form-control" name="fname" value="{{fname}}"/>
									</div>

									<div class="col-md-6">
										<label class="control-label">Last Name</label> <input
											type="text" class="form-control" name="lname" value="{{lname}}"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label">Address 1</label> <input
											type="text" class="form-control" name="address1" value = "{{address1}}"/>
									</div>

									<div class="col-md-6">
										<label class="control-label">Address 2</label> <input
											type="text" class="form-control" name="address2" value = "{{address2}}"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label class="control-label">Password</label> <input
											type="password" class="form-control" name="password" value = "{{passowrd}}"/>
									</div>

									<div class="col-md-6">
										<label class="control-label">Re Enter Password</label> <input
											type="password" class="form-control" name="rpassword"/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label class="control-label">Gender</label> <select
											class="form-control" name="sex" value = "{{gender}}">
											<option value="m">Male</option>
											<option value="f">Female</option>
										</select>
									</div>
									<div class="col-md-4">
<?php if($this->session->userdata('user_Mode') == 'a'){?>
				<label class="control-label">Blood Center</label>
<?php if($centers != null){?>
                 <select class="form-control" name="cId" value="{{center.cId}}">
											<option value="">Select</option>
<?php foreach ($centers as $center) { ?>
                    <option value="<?= $center->cId?>"><?php echo $center->address1.' '.$center->address2."(".$center->province.")";?></option>
<?php }?>
                </select>
<?php }?>
            </div>
									<div class="col-md-4">
<?php }else{?>
            <div class="col-md-8">
<?php }?>            
				<label class="control-label">Employee Type</label> <select
												class="form-control" name="type" value = "{{type}}">
												<option value="a">Select</option>
<?php if($this->session->userdata('user_Mode') == 'a'){?>
					<option value="a">Administrator</option>
												<option value="as">Staff Administrator</option>
<?php }?>
					<option value="s">Staff</option>
											</select>
										</div>
									</div>
								</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default"
							form="updateFormStaff">Update</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
	</div>
	<!--  end of update cluster model -->


</div>
