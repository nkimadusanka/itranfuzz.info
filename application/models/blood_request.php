<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bood_request extends CI_model{
	var $brId;
	var $bType;
	var $eDate;
	var $eTime;
	var $amount;
}

//get Donation_method by brId
	public function getBrId($brId){
		
		$this->db->where('brId', $brId);
		$rows = $this->db->get('blood_request');
		if($rows->num_rows() > 0){
			return new Bood_request($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by blood type
	public function getBType($bType){
		
		$this->db->where('bType', $bType);
		$rows = $this->db->get('blood_request');
		if($rows->num_rows() > 0){
			return new Bood_request($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by Date
	public function getEDate($eDate){
		
		$this->db->where('eDate', $eDate);
		$rows = $this->db->get('blood_request');
		if($rows->num_rows() > 0){
			return new Bood_request($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by Time
	public function getETime($eTime){
		
		$this->db->where('eTime', $eTime);
		$rows = $this->db->get('blood_request');
		if($rows->num_rows() > 0){
			return new Bood_request($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by blood type
	public function getAmount($amount){
		
		$this->db->where('amount', $amount);
		$rows = $this->db->get('blood_request');
		if($rows->num_rows() > 0){
			return new Bood_request($rows->first_row());
		}else{
			return null;
		}
	}

//get method of blood_request
public function getBrId(){
		return($this->brId);
	}
public function getBType(){
		return($this->bType);
	}
public function getEDate(){
		return($this->eDate);
	}
public function getETime(){
		return($this->eTime);
	}
public function getAmount(){
		return($this->amount);
	}			

// set method of blood_request
public function setBrId($brId) {
		$this->brId = $brId;
	}	
public function setBType($bType) {
		$this->bType = $bType;
	}
public function setEDate($eDate) {
		$this->eDate = $eDate;
	}
public function setETime($eTime) {
		$this->eTime = $eTime;
	}
public function setAmount($amount) {
		$this->amount = $amount;
	}			


<!DOCTYPE HTML>
<html>
<head>
</head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<body>
    <div class="row">
        <div class="modal-body">
            <ul class="nav nav-tabs">
	            <li><img src="#" height="50" width="200"/><li>
		        <li>
                    <input type="text" class="span3 search-query" class="icon-search icon-black" placeholder="Search"/> 
                <li>
                <li><a href="#">Home</a><li>
	            <li><a href="#">Profile</a><li>
	            <li><a href="#">Settings</a><li>
		        <li><img src="defualt_profile_20.jpg" height="50" width="50"/><li>
	        </ul>
	    </div>
    </div>	
    <div class="col-md-2">
        <div class="modal-body">	
            <nav class="row">
                <ul class="nav nav-pills nav-stacked span3">
                    <li><a href="#">Manage Cluster</a><li>
	                <li><a href="#">Manage Cluster Staff</a><li>
	                <li><a href="#">Manage Event</a><li>
		            <li><a href="#">Manage Donor</a><li>
		            <li><a href="#">Manage Setting</a><li>
	            </ul>
	        </nav>
	    </div>
    </div>
    <div class="row">
        <div class="col-md-8">	
            <section>
                <form class="well">
                    <center>
                        <h1><label>Add Blood Request</label></h1><br><br>
                    </center>
                    <label>Description</label><br> 
                        <textarea name="Description" placeholder="Type your description here" rows="5" cols="60">
                        </textarea><br><br>
                    <label>Blood Type</label>
                        <select name ="Blood Type ">                 
	                        <option>A+</option>                  
	                        <option>A-</option>                                   
	                        <option>B+</option>                  
	                        <option>B-</option> 
	                        <option>AB+</option>                  
	                        <option>AB-</option>                  
	                        <option>O+</option>
	                        <option>O-</option>
                        </select><br><br>
                    <label>Date</label>
                        <input type="date" id="datepicker" name='from' size='10' value="" class="span3" /> <br><br>
                    <label>End Time</label>
                        <input type="time" name="usr_time" class="span3"/><br><br>
<tr>
                    <label>Expect Participation</label> 
                        <textarea name="Description" rows="1" cols="6">
                        </textarea><br><br>
</tr>

<tr>
					<label>Broadcast Message</label> <br>
					    <textarea name="Description" rows="5" cols="60" placeholder="Type your broadcast massage here">
					    </textarea><br><br>
</tr>

<tr>
                    <label>Broadcast Message Type</label> <br>
                        <INPUT TYPE="CHECKBOX" NAME="email"> E-Mail
                        <INPUT TYPE="CHECKBOX" NAME="mobileApplication"> Mobile Application 
                        <INPUT TYPE="CHECKBOX" NAME="SMS"> SMS<br><br>
</tr>

                    <button class="btn btn-primary">Add Broadcast Message</button> 
                    <button class="btn">Clear</button> 
</table>
                </form>
            </section>
        </div>
    </div>
    <div class="modal-body">
        <aside>
	    </aside>
	</div>
    <div class="row">
        <center>
            <footer>All copy right received 2014</footer>
                <script src+"js/bootstrap.js"></script>
        </center>
    </div>	
</body>
</html>