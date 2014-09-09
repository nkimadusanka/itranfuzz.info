<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Center extends CI_model{
	var $cId;
	var $province;
	var $address1;
	var $address2;
	var $phone;
	var $lLongitude;
	var $lLatitude;
	var $type;

	#constructor of the center
	public function __construct($row = NULL){
		if($row != null){
			$this->cId = $row->cId;
			$this->province = $row->province;
			$this->address1 = $row->address1;
			$this->address2 = $row->address2;
			$this->phone = $row->phone;
			$this->lLongitude = $row->lLongitude;
			$this->lLatitude = $row->lLatitude;
			$this->type = $row->type;
		}
	}

	#get all centers
	public function getAllCenters(){
		$query = $this->db->get('center');
		if($query->num_rows > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	#setter methods
	public function setCId($cId){
		$this->cId = $cId;
	}
	public function setProvince($province){
		$this->province = $province;
	}
	public function setAddress1($address1){
		$this->address1 = $address1;
	}
	public function setAddress2($address2){
		$this->address2 = $address2;
	}
	public function setPhone($phone){
		$this->phone = $phone;
	}
	public function setLLongitude($lLongitude){
		$this->lLongitude = $lLongitude;
	}
	public function setLLatitude($lLatitude){
		$this->lLatitude = $lLatitude;
	}
	public function setType($type){
		$this->type = $type;
	}
	#getter methods
	public function getCId(){
		return($this->cId);
	}
	public function getProvince(){
		return($this->province);
	}
	public function getAddress1(){
		return($this->address1);
	}
	public function getAddress2(){
		return($this->address2);
	}
	public function getPhone($phone){
		return($this->phone);
	}
	public function getLLongitude(){
		return($this->lLongitude);
	}
	public function getLLatitude(){
		return($this->lLatitude);
	}
	public function getType(){
		return($this->type);
	}
}