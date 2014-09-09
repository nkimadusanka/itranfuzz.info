<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_model{
	var $eId;
	var $fname;
	var $lname;
	var $gender;
	var $email;
	var $nic;
	var $password;
	var $phone;
	var $address1;
	var $address2;
	var $type;
	var $photo;
	var $center_cId;

	#constructor of employees
	public function __construct($row = NULL){
		if(!is_null($row)){
			$this->eId = $row->eId;
			$this->fname = $row->fname;
			$this->lname = $row->lname;
			$this->gender = $row->gender;
			$this->email = $row->email;
			$this->nic = $row->nic;
			$this->password = $row->password;
			$this->phone = $row->phone;
			$this->address1 = $row->address1;
			$this->address2 = $row->address2;
			$this->type = $row->type;
			$this->photo = $row->photo;
			$this->center_cId = $row->center_cId;
		}
	}
	#add getter methods
	public function getEId(){
		return($this->eId);
	}
	public function getFname(){
		return($this->fname);
	}
	public function getLname(){
		return($this->lname);
	}
	public function getGender(){
		return($this->gender);
	}
	public function getEmail(){
		return($this->email);
	}
	public function getPassword(){
		return($this->password);
	}
	public function getPhone(){
		return($this->phone);
	}
	public function getAddress1(){
		return($this->address1);
	}
	public function getAddress2(){
		return($this->address2);
	}
	public function getType(){
		return($this->type);
	}
	public function getPhoto(){
		return($this->photo);
	}
	public function getCenter(){
		return($this->center_cId);
	}
	public function getNic(){
		return($this->nic);
	}
	#end of getter methods
	#start of setter methods
	public function setEId($eId){
		$this->eId = $eId;
	}
	public function setFname($fname){
		$this->fname = $fname;
	}
	public function setLname($lname){
		$this->lname = $lname;
	}
	public function setGender($gender){
		$this->gender = $gender;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setPhone($phone){
		$this->phone = $phone;
	}
	public function setAddress1($address1){
		$this->address1 = $address1;
	}
	public function setAddress2($address2){
		$this->address2 = $address2;
	}
	public function setType($type){
		$this->type = $type;
	}
	public function setPhoto($photo){
		$this->photo = $photo;
	}
	public function setCenter($center_cId){
		$this->center_cId = $center_cId;
	}
	public function setNic($nic){
		$this->nic = $nic;
	}
	#end of setter methods
}