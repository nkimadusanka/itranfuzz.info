<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation_method extends CI_model{
	var $dmId;
	var $description;
	var $minAge;
	var $maxAge;
	var $weight;
	var $dParticipating;
	var $maxAmount;
}

//get Donation_method by dmId
	public function getDmId($dmId){
		
		$this->db->where('dmId', $dmId);
		$rows = $this->db->get('donation_method');
		if($rows->num_rows() > 0){
			return new Donation_method($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by minAge
	public function getMinAge($minAge){
		
		$this->db->where('minAge', $minAge);
		$rows = $this->db->get('donation_method');
		if($rows->num_rows() > 0){
			return new Donation_method($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by maxAge
	public function getMaxAge($maxAge){
		
		$this->db->where('maxAge', $maxAge);
		$rows = $this->db->get('donation_method');
		if($rows->num_rows() > 0){
			return new Donation_method($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by weight
	public function getWeight($weight){
		
		$this->db->where('weight', $weight);
		$rows = $this->db->get('donation_method');
		if($rows->num_rows() > 0){
			return new Donation_method($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by dParticipating
	public function getDParticipating($dParticipating){
		
		$this->db->where('dParticipating', $dParticipating);
		$rows = $this->db->get('donation_method');
		if($rows->num_rows() > 0){
			return new Donation_method($rows->first_row());
		}else{
			return null;
		}
	}

//get Donation_method by maxAmount
	public function getMaxAmount($maxAmount){
		
		$this->db->where('maxAmount', $maxAmount);
		$rows = $this->db->get('donation_method');
		if($rows->num_rows() > 0){
			return new Donation_method($rows->first_row());
		}else{
			return null;
		}
	}				


//get methods for donation_method model

public function getDmId(){
		return($this->dmId);
	}
public function geteDscription(){
		return($this->description);
	}
public function getMinAge(){
		return($this->minAge);
	}
public function getMaxAge(){
		return($this->maxAge);
	}
public function getWeight(){
		return($this->weight);
	}
public function getDParticipating(){
		return($this->dParticipating);
	}
public function getMaxAmount(){
		return($this->maxAmount);
	}	

//set method for donation_method model	

public function setDmId($dmId) {
		$this->dmId = $dmId;
	}	
public function setDescription($description) {
		$this->description = $description;
	}
public function setMinAge($minAge) {
		$this->minAge = $minAge;
	}	
public function setMaxAge($maxAge) {
		$this->maxAge = $maxAge;
	}	
public function setWeight($weight) {
		$this->weight = $weight;
	}	
public function setDParticipating($dParticipating) {
		$this->dParticipating = $dParticipating;
	}
public function setMaxAmount($maxAmount) {
		$this->maxAmount = $maxAmount;
	}
<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <body>
	    <div class="modal-body">
            <ul class="nav nav-tabs">
	            <li><img src="#" height="50" width="200"  /><li>
		        <li>
                    <input type="text" class="span3 search-query" class="icon-search icon-black" placeholder="Search"/> 
                <li>
                <li><a href="#">Home</a><li>
	            <li><a href="#">Profile</a><li>
	            <li><a href="#">Settings</a><li>
		        <li><img src="defualt_profile_20.jpg" height="50" width="50"/><li>
	        </ul>
		</div>
        <div class="col-md-2">		
            <nav>
                <ul class="nav nav-pills nav-stacked span3">
                    <li><a href="#">Manage Cluster</a><li>
	                <li><a href="#">Manage Cluster Staff</a><li>
	                <li><a href="#">Manage Event</a><li>
		            <li><a href="#">Manage Donor</a><li>
		            <li><a href="#">Manage Setting</a><li>
	            </ul>
	        </nav>
		</div>
		<div class="row">
            <div class="col-md-8">			
                <div class="modal-body">
                    <form class="well">
                        <h1><label>Biood Donation Method Registration Form</label></h1><br><br>
						    <label>Name</label>
                                <input type="text" name="Name" class="span3"/><br><br>
							<label>Age</label>
                                <input type="text" name="Age" class="span3"/><br><br>
							<label>Type</label>
                                <input type="text" name="Type" class="span3"/><br><br>
                            <label>Max Amount</label>
                                <input type="text" name="Max_Amount" class="span3"/><br><br>
							<label>Duration</label>
                                <input type="text" name="Duration" class="span3"/><br><br>
                            <label>Reqired Weight</label>
                                <input type="text" name="Reqired_Weight" class="span3"/><br><br>
							<label>Density of Blood Cells</label>
                                <input type="text" name="Density_of_Blood_Cells" class="span3"/><br><br>	
                            <button class="btn btn-primary">Submit</button> 
                            <button class="btn">Clear</button> 
                        </table>
                        </form>
                    </section>
			    </div>
            </div>
		</div>
        <div class="row">		
            <center>
                <footer>All copy right received 2014</footer>
		    </center>
		</div>
        <script src+"js/bootstrap.js"></script>
	
    </body>
</html>																							