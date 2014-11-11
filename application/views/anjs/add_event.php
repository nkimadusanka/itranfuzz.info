<div class="page-header">
	<h1>Add Event <small>Enter details about event</small></h1>
</div>
<br/>

<form id="addEvent" method="post"
	action="" ng-controller="addEventController">
	<div class="form-group">
     	<div class="row">
     		<div class= "col-md-3">
  				<label class="control-label">Description</label>
    		</div>
     		<div class= "col-md-9">
	     		<textarea class="form-control" placeholder="Type your description here" rows="5" cols="60" name="description">
	     		</textarea>
			</div>
		</div>
	</div>
	<div class="form-group">
        <div class="row">
           	<div class="col-md-3">
     	        <label class"control-label">Organization Name</label>
     	    </div>
     	    <div class="col-md-9">			
				<input type="text" class="form-control" name="oganization_name"/>
			</div>
		</div>
	</div>		
	<div class="form-group">
        <div class="row">	
           	<div class="col-md-6">
				<label class="control-label">Location</label>
				<input type="text" class="form-control" name="location"/>
			</div>
			<div class="col-md-6">
				<label class="control-label">Expect Participation</label><br/>
				<input type="text" class="form-control" name="expect_participation"/>
	        </div>
        </div>
    </div>
	<div class="form-group">
        <div class="row">
            <div class="col-md-6">
	     	    <label class="control-label">Address 1</label>
				<input type="text" class="form-control"  name="address1"/>
			</div>
           	<div class="col-md-6">
				<label class="control-label">Address 2</label><br/>
				<input type="text" class="form-control" name="address2"/>
			</div>
		</div>
	</div>	
	<div class="form-group">
    	<div class="row">
			<div class="col-md-6">
                <label class="control-label">Phone</label>   
				<input type="text" class="form-control" name="phone"/>
			</div>
            <div class="col-md-6">
				<label class="control-label">Date</label>
			</div> 
			<div class="col-md-6">   
				<input type="date" class="form-control" name="date"/>
			</div>
		</div>
	</div>
	<div class="form-group">
    	<div class="row">
			<div class="col-md-6">
				<label class="control-label">Start Time</label>
				<input type="time" class="form-control" name="start_time"/>
			</div>
			<div class="col-md-6">
				<label class="control-label">End time</label>
				<input type="time" class="form-control" name="end_time"/>
			</div>
		</div>
	</div>
	<div class="form-group">
    	<div class="row">
	    	<div class="col-md-3">
				<label class"control-label">Broadcast Message</label>
			</div>
			<div class="col-md-9">
				<textarea name="Broadcast_Message" class="form-control" placeholder="Type your broadcast massage here" rows="5" cols="60">
				</textarea>
			</div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
    		<div class="col-md-6">
    	    </div>
    		<div class="col-md-6">
				<input type="submit" class="btn btn-primary" text="Add Broadcast Message"/>
				<button class="btn">Clear</button> 
            </div>     
		</div>
	</div>
</form>
	