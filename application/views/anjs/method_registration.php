<div class="page-header">
	<h1>Blood Donation Method Registration Form <small>Enter details about donation method</small></h1>
</div>
<br/>
<form id="method_registration" method="post"
	action="" ng-controller="methord_registrationController">
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">
				<label>Name</label>
				<input type="text" name="name" class="form-control"/>
			</div>
			<div class="col-md-6">
				<label>Age</label>	
				<input type="text" name="age" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
				<label>Type</label>	
				<input type="text" name="type" class=class="form-control"/>
			</div>
			<div class="col-md-6">
				<label>Max Amount</label>
				<input type="text" name="max_amount" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
				<label>Duration</label>   
				<input type="text" name="duration" class="form-control"/>
			</div>
			<div class="col-md-6">
				<label>Reqired Weight</label>
				<input type="text" name="reqired_weight"class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
					<label>Density of Blood Cells</label>
					<input type="text" name="density_of_blood_cells" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
           	<div class="col-md-6">
	       	</div>
       		<div class="col-md-6">
				<button class="btn btn-primary">Submit</button> 
				<button class="btn">Clear</button>
			</div>
		</div>
	</div>
</form>