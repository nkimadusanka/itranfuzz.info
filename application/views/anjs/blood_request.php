<div class="page-header">
	<h1>Add Blood Request <small>Enter details about blood request</small></h1>
</div>
<br/>
<form id="blood_request" method="post"
	action="event_controller/addBloodReq" ng-controller="addBloodRequest">
	<div class="form-group">
     	<div class="row">
     		<div class= "col-md-3">
     			<label>Description</label>
            </div>
     		<div class= "col-md-9">
     			<textarea class="form-control" name="description" placeholder="Type your description here" rows="5" cols="60">
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
				<select name ="bType"  class="form-control">                 
					<option value='a+'>A+</option>                  
					<option value='a-'>A-</option>                          
				    <option value='b+'>B+</option>                  
					<option value='b-'>B-</option> 
					<option value='ab+'>AB+</option>                  
					<option value='ab-'>AB-</option>                  
					<option value='o+'>O+</option>
					<option value='o-'>O-</option>
				</select><br><br>
				</div>
			</div>
		</div>					
	 <div class="form-group">
        <div class="row">
           	<div class="col-md-6">	
				<label>Date</label>
				<input type="date" name='eDate' size='10' value="" class="form-control" />
			</div>
			<div class="col-md-6">
				<label>End Time</label>
				<input type="time" name="eTime" class="form-control"/>
			</div>
		</div>
	</div>
	<div class="form-group">
        <div class="row">
           	<div class="col-md-6">	
				<label>Expect Participation</label>
			</div>
				<div class="col-md-6">
				<input type="text" name="amount" class="form-control">
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
	<hr/>
    <div class="form-group">
        <div class="row">
    		<div class="col-md-8">
    	    </div>
    		<div class="col-md-4">
				<input type="submit" class="btn btn-primary" value="Add Blood Request"/>
				<input type="reset" class="btn" value="Clear"/>
			</div>
		</div>
	</div>
</form>