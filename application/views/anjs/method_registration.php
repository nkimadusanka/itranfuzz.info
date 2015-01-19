<div class="page-header">
	<h1>Blood Donation Method Registration Form <small>Enter details about donation method</small></h1>
</div>
<br/>
<form id="blood_method" method="post" action="event_controller/addBloodMethod" ng-controller="addBloodMethod">
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">
				<label>Description</label>
				<input type="text" name="description" class="form-control"/>
			</div>
			<div class="col-md-6">
				<label>Min Age</label>	
				<input type="text" name="minAge" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
				<label>Max Age</label>	
				<input type="text" name="maxAge" class="form-control"/>
			</div>
			<div class="col-md-6">
				<label>Weight</label>
				<input type="text" name="weigth" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
				<label>Duration Participation</label>   
				<input type="text" name="dParticipating" class="form-control"/>
			</div>
			<div class="col-md-6">
				<label>Max Amount</label>
				<input type="text" name="maxAmount"class="form-control"/>
			</div>
		</div>
	</div>
	<hr/>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
	       	</div>
       		<div class="col-md-3 col-md-offset-9">
       			<input type="submit" class="btn btn-primary" value="Add"/>
       			<input type="reset" class="btn" value="Clear"/>
			</div>
		</div>
	</div>
</form>