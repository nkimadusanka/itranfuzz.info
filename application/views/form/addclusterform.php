<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--registration form to be submitted to the website-->
<form id="regFormCluster" method="post"
	action="privateapi/addCenter" ng-controller="clusterController">
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Province</label>
			<div class="col-md-6 selectContainer">
				<select class="form-control" name="province">
					<option value="">Select Province</option>
					<option value="a+">Central Province</option>
					<option value="a+">Eastern Province</option>
					<option value="a+">North Central Province</option>
					<option value="a+">Northern Province</option>
					<option value="a+">North Western Province</option>
					<option value="a+">Sabaragamuwa Province</option>
					<option value="a+">Southern Province</option>
					<option value="a+">Uva Province</option>
					<option value="a+">Western Province</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Address1 </label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="address1" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Address2 </label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="address2" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Phone </label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="phone" />
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<label class="col-md-2 control-label">Type</label>
			<div class="col-md-6 selectContainer">
				<select class="form-control" name="ctype">
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
                <div id="map-canvas" style="height: 300px;width: 100%;"/>
            </div>
		</div>
	</div>
	<button type="submit" class="btn btn-default">Register</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<!--End of the registration form-->
<style type="text/css">
#regForm .form-control-feedback {
	top: 25px;
	right: 10px;
}

#movieForm .selectContainer .form-control-feedback {
	top: 25px;
	right: 25px;
}
</style>