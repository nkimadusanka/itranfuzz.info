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


<html>
<head>
</head>

<body>
Add Blood Request: <br><br>

Description : <br> 
<textarea name="Description" rows="5" cols="60">
</textarea>
<br><br>

Blood Type :
<select name ="Blood Type">                 
	<option>A+</option>                  
	<option>A-</option>                                   
	<option>B+</option>                  
	<option>B-</option> 
	<option>AB+</option>                  
	<option>AB-</option>                  
	<option>O+</option>
	<option>O-</option>
</select> <br><br>

Date : 
<input type="date" id="datepicker" name='from' size='8' value="" /> 
<br><br>


<form action="demo_form.asp">
End Time :
  <input type="time" name="usr_time">
</form>
<br><br>

Expect Participation: 
<textarea name="Description" rows="1" cols="6">
</textarea>
<br><br>

Broadcast Message : <br>
<textarea name="Description" rows="5" cols="60">
</textarea>
<br><br>

Broadcast Message Type : <br>
<INPUT TYPE="CHECKBOX" NAME="email"> E-Mail
<INPUT TYPE="CHECKBOX" NAME="mobileApplication"> Mobile Application 
<INPUT TYPE="CHECKBOX" NAME="SMS"> SMS
<br><br>

<INPUT TYPE="SUBMIT" VALUE="Add Broadcast Message"> 
<INPUT TYPE="RESET" VALUE="Clear">

</body>
</html>