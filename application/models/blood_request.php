<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blood_request extends MY_Model{
	var $brId;
	var $bType;
	var $eDate;
	var $eTime;
	var $amount;

	public function __construct(){
		parent::__construct();
	}
/*

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
*/
}

