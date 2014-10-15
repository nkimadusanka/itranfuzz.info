<div class="row">
    <div class="col-md-8">
		<div class="modal-body">
            <section>
                <form class="well">
				    <table>
					    <tr>
                            <h1><label>Add Blood Request</label></h1><br><br>
						</tr><tr>
                        <td>						
                            <label>Description</label><br>
                        </td><td>							
                            <textarea name="Description" placeholder="Type your description here" rows="5" cols="60">
                            </textarea><br><br>
						</td>
						</tr><tr>
						<td>
							<label>Blood Type</label>
						</td><td>	
							<select name ="Blood Type ">                 
								<option>A+</option>                  
								<option>A-</option>                            <option>B+</option>                  
								<option>B-</option> 
								<option>AB+</option>                  
								<option>AB-</option>                  
								<option>O+</option>
								<option>O-</option>
							</select><br><br>
						</td>
                        </tr><tr>
                        <td>						
							<label>Date</label>
						</td><td>
							<input type="date" id="datepicker" name='from' size='10' value="" class="span3" /> <br><br>
						</td>
						</tr><tr>
						<td>
							<label>End Time</label>
						</td><td>
							<input type="time" name="usr_time" class="span3"/><br><br>
						</td>
						</tr><tr>
						<td>
							<label>Expect Participation</label>
						</td><td>
							<input type="text" name="Description"><br><br>
						</td>	
						</tr><tr>
						<td>
							<label>Broadcast Message</label> <br>
						</td><td>
					        <textarea name="Description" rows="5" cols="60" placeholder="Type your broadcast massage here">
							</textarea><br><br>
						</td>	
						</tr>
					</table>	
					<label>Broadcast Message Type</label> <br>	
					<INPUT TYPE="CHECKBOX" NAME="email"> E-Mail
					<INPUT TYPE="CHECKBOX" NAME="mobileApplication"> Mobile Application 
					<INPUT TYPE="CHECKBOX" NAME="SMS"> SMS<br><br>
					<button class="btn btn-primary">Add Broadcast Message</button>
					<button class="btn">Clear</button>
                </form>
            </section>
        </div>
    </div>
</div>	