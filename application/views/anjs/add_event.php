<div class="page-header">
	<h1>Add Event <small>Enter details about event</small></h1>
</div>
<br/>
<form id="addEvent" method="post"
	action="event_controller/addEvent" ng-controller="addEventController">
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
				<input type="text" class="form-control" name="orgName"/>
			</div>
		</div>
	</div>		
	<div class="form-group">
        <div class="row">
        	<div class="col-md-3">
     	        <label class="control-label">Expect Participation</label>
     	    </div>
			<div class="col-md-9">
				<input type="text" class="form-control" name="eParticipation"/>
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
				<input type="date" class="form-control" name="date"/>
			</div> 
		</div>
	</div>
	<div class="form-group">
    	<div class="row">
			<div class="col-md-6">
				<label class="control-label">Start Time</label>
				<input type="time" class="form-control" name="stime"/>
			</div>
			<div class="col-md-6">
				<label class="control-label">End time</label>
				<input type="time" class="form-control" name="etime"/>
			</div>
		</div>
	</div>
	<div class="form-group">
    	<div class="row">
			<div class="col-md-3">
				<label class="control-label">Location</label>
			</div>
			<div class="col-md-9">
				<div id="map-canvas" style="height: 300px;width: 100%;"/>
			</div>
		</div>
	</div>

<?php if($this->session->userdata('user_Mode') == 'a'){?>
	<div class="form-group">
    	<div class="row">
			<div class="col-md-3">
				<label class="control-label">Blood Center</label>
			</div>
			<div class="col-md-9">
<?php if($centers != null){?>
                 <select class="form-control" name="cId">
					<option value="">Select</option>
<?php foreach ($centers as $center) { ?>
                    <option value="<?= $center->cId?>"><?php echo $center->address1.' '.$center->address2."(".$center->province.")";?></option>
<?php }?>
                </select>
<?php }?>
<?php }?>
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
    <hr/>
    <div class="form-group">
        <div class="row">
    		<div class="col-offset-md-6">
    	    </div>
    		<div class="col-md-8">
    			<input type="submit" class="btn btn-primary" value="Add event"/>
				<input type="rset" class="btn" value="Reset"/>
            </div>     
		</div>
	</div>
</form>
	