<div class="page-header">
	<h1>Add Blood Request <small>Enter details about blood request</small></h1>
</div>
<br/>
<form id="blood_request" method="post"
	action="" ng-controller="blood_requestController">
	<div class="form-group">
     	<div class="row">
     		<div class= "col-md-3">		
                <label>Description</label>
            </div>
     		<div class= "col-md-9">								
                <textarea class="form-control" name="Description" placeholder="Type your description here" rows="5" cols="60">
                </textarea><br><br>
			</div>
		</div>
	</div>
   <div class="form-group">
        <div class="row">
           	<div class="col-md-3">
				<label>Blood Type</label>
			</div>
			<div class="col-md-2">						
				<select name ="blood_type ">                 
					<option>A+</option>                  
					<option>A-</option>                          
				    <option>B+</option>                  
					<option>B-</option> 
					<option>AB+</option>                  
					<option>AB-</option>                  
					<option>O+</option>
					<option>O-</option>
				</select><br><br>
				</div>
			</div>
		</div>					
	 <div class="form-group">
        <div class="row">
           	<div class="col-md-6">	
				<label>Date</label>
				<input type="date" id="datepicker" name='date' size='10' value="" class="form-control" />
			</div>
			<div class="col-md-6">
				<label>End Time</label>
				<input type="time" name="end_time" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">	
				<label>Expect Participation</label>
			</div>
				<div class="col-md-6">
				<input type="text" name="expect_participation" class="form-control">
			</div>
		</div>
	</div>
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">	
				<label>Broadcast Message</label>
			</div>
			<div class="col-md-6">
		        <textarea name="broadcast_message" rows="5" cols="60" class="form-control" placeholder="Type your broadcast massage here">
				</textarea>
			</div>
		</div>
	</div>	
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">
				<label>Broadcast Message Type</label>	
				<INPUT TYPE="CHECKBOX" NAME="email"> E-Mail
				<INPUT TYPE="CHECKBOX" NAME="mobileApplication"> Mobile Application 
				<INPUT TYPE="CHECKBOX" NAME="SMS"> SMS
			</div>
		</div>
	</div>
    <div class="form-group">
        <div class="row">
    		<div class="col-md-6">
    	    </div>
    		<div class="col-md-6">
				<button class="btn btn-primary">Add Broadcast Message</button>
				<button class="btn">Clear</button>
			</div>
		</div>
	</div>
</form>