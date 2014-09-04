<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donor extends CI_model{

	var $dId;
	var $email;
	var $password;
	var $fname;
	var $lname;
	var $phone;
	var $address1;
	var $address2;
	var $gender;
	var $dob;
	var $illnessTest;
	var $lLongitude;
	var $lLatitude;
	var $bType;
	var $dState;
	var $center_cId;

	#constructor of donor model
	public function __construct($row = NULL){
		if(!is_null($row)){
			$this->dId = $row->dId;
			$this->email = $row->email;
			$this->password = $row->password;
			$this->fname = $row->fname;
			$this->lname = $row->lname;
			$this->phone = $row->phone;
			$this->address1 = $row->address1;
			$this->address2 = $row->address2;
			$this->gender = $row->gender;
			$this->dob = $row->dob;
			$this->illnessTest = $row->illnessTest;
			$this->lLatitude = $row->lLatitude;
			$this->lLongitude = $row->lLongitude;
			$this->bType = $row->bType;
			$this->dState = $row->dState;
			$this->center_cId = $row->center_cId;
		}
	}

	#getter function here
	public function getDId(){
		return($this->dId);
	}
	public function getEmail(){
		return($this->email);
	}
	public function getPassword(){
		return($this->password);
	}
	public function getFname(){
		return($this->fname);
	}
	public function getLname(){
		return($this->lname);
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
	public function getGender(){
		return($this->gender);
	}
	public function getDob(){
		return($this->dob);
	}
	public function getIllnessTest(){
		return($this->illnessTest);
	}
	public function getLLatitude(){
		return($this->lLatitude);
	}
	public function getLLongitude(){
		return($this->lLongitude);
	}
	public function getBType(){
		return($this->bType);
	}
	public function getDState(){
		return($this->dState);
	}
	public function getCenter(){
		return($this->center_cId);
	}
	#end of getter functions
	#setter functions
	public function setDId($dId){
		$this->dId = $dId;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setFname($fname){
		$this->fname = $fname;
	}
	public function setLname($lname){
		$this->lname = $lname;
	}
	public function setPhone($phone){
		$this->$phone = $phone;
	}
	public function setAddress1($address1){
		$this->address1 = $address1;
	}
	public function setAddress2($address2){
		$this->address2 = $address2;
	}
	public function setGender($gender){
		$this->gender = $gender;
	}
	public function setDob($dob){
		$this->dob = $dob;
	}
	public function setIllnessTest($illnessTest){
		$this->illnessTest = $illnessTest;
	}
	public function setLLatitude($lLatitude){
		$this->lLatitude = $lLatitude;
	}
	public function setLLongitude($lLongitude){
		$this->lLongitude = $lLongitude;
	}
	public function setBType($bType){
		$this->bType = $bType;
	}
	public function setDState($dState){
		$this->dState = $dState;
	}
	public function setCenter($center_cId){
		$this->center_cId = $center_cId;
	}
	#End of setter functions
}
