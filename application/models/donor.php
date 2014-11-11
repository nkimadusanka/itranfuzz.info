<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Donor extends CI_model {
	var $dId;
	var $email;
	var $nic;
	var $password;
	var $fname;
	var $lname;
	var $photo;
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
	var $center;
	
	// constructor of donor model
	public function __construct($row = NULL) {
		//loading instance of models
		$CI =& get_instance();
		$CI->load->model('Center');
		
		$this->load->model('center');
		if (! is_null ( $row )) {
			$this->dId = $row->dId;
			$this->email = $row->email;
			$this->nic = $row->nic;
			$this->password = $row->password;
			$this->fname = $row->fname;
			$this->lname = $row->lname;
			$this->phone = $row->phone;
			$this->photo = $row->photo;
			$this->address1 = $row->address1;
			$this->address2 = $row->address2;
			$this->gender = $row->gender;
			$this->dob = $row->dob;
			$this->illnessTest = $row->illnessTest;
			$this->lLatitude = $row->lLatitude;
			$this->lLongitude = $row->lLongitude;
			$this->bType = $row->bType;
			$this->dState = $row->dState;
			$this->center = $CI->Center->getCenterById($row->center_cId);
		}
	}
	
	// add donor to database by array input
	public function addDonor(
			$email,
			$nic,
			$password,
			$fname,
			$lname,
			$phone,
			$photo,
			$address1,
			$address2,
			$gender,
			$dob,
			$illnessTest,
			$lLatitude,
			$lLongitude,
			$bType,
			$dState,
			$center_cId) {
		
		$data = array (
				'email' => $email,
				'nic' => $nic,
				'password' => $password,
				'fname' => $fname,
				'lname' => $lname,
				'phone' => $phone,
				'photo' => $photo,
				'address1' => $address1,
				'address2' => $address2,
				'gender' => $gender,
				'dob' => $dob,
				'illnessTest' => $illnessTest,
				'lLatitude' => $lLatitude,
				'lLongitude' => $lLongitude,
				'bType' => str_split($bType)[0],
				'dState' => str_split($dState)[0],
				'center_cId' => (int)$center_cId
		);
		
		$this->db->insert ( 'donor', $data );
		return $this->db->affected_rows () ? true : false;
	}
	
	//get Donor by email method
	public function getDonorByEmail($email){
		
		$this->db->where('email', $email);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}

	//get Donor by nic number method
	public function getDonorNic($nic){
		
		$this->db->where('nic', $nic);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}
	
	//get Donor by first name method
	public function getDonorByFname($fname){
		
		$this->db->where('fname', $fname);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}

	//get Donor by Last name method
	public function getDonorByLname($lname){
		
		$this->db->where('lname', $lname);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}



	//get Donor by address1 method
	public function getDonorByAddress1($address1){
		
		$this->db->where('address1', $address1);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}

	//get Donor by address2 method
	public function getDonorByAddress2($address2){
		
		$this->db->where('address2', $address2);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}

	//get Donor by gender method
	public function getDonorByGender($gender){
		
		$this->db->where('gender', $gender);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}

	//get Donor by blood type method
	public function getDonorByBtype($btype){
		
		$this->db->where('btype', $btype);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}

	//get Donor by center method
	public function getDonorByCenter($center){
		
		$this->db->where('center', $center);
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			return new Donor($rows->first_row());
		}else{
			return null;
		}
	}
	
	//update donor location
	public function updateLocationByEmail($email,$lat,$lng){
		$this->db->where('email', $email);
		return($this->db->update('donor', array("lLatitude"=>$lat,"lLongitude"=>$lng)));
	}

	//get All donors list
	public function getAllDonors(){
		$rows = $this->db->get('donor');
		if($rows->num_rows() > 0){
			$donors = array();
			foreach($rows->first_row() as $r) {
				array_push($donors,new Donor($rows->first_row()));
			}
			return $donors;
		}else{
			return null;
		}	
	}
	//remove donor by id
	public function removedonorbyid($dId){
		$this->db->where('dId', $dId);
		return($this->db->delete('donor'));
	}
	
	// **************************************** getter function here******************************************************
	public function getDId() {
		return ($this->dId);
	}
	public function getEmail() {
		return ($this->email);
	}
	public function getPassword() {
		return ($this->password);
	}
	public function getFname() {
		return ($this->fname);
	}
	public function getLname() {
		return ($this->lname);
	}
	public function getPhone() {
		return ($this->phone);
	}
	public function getAddress1() {
		return ($this->address1);
	}
	public function getAddress2() {
		return ($this->address2);
	}
	public function getGender() {
		return ($this->gender);
	}
	public function getDob() {
		return ($this->dob);
	}
	public function getIllnessTest() {
		return ($this->illnessTest);
	}
	public function getLLatitude() {
		return ($this->lLatitude);
	}
	public function getLLongitude() {
		return ($this->lLongitude);
	}
	public function getBType() {
		return ($this->bType);
	}
	public function getDState() {
		return ($this->dState);
	}
	public function getCenter() {
		return ($this->center);
	}
	public function getNic() {
		return ($this->nic);
	}
	public function getPhoto() {
		return ($this->photo);
	}
	// end of getter functions
	// *************************************************** setter functions*****************************************************
	public function setDId($dId) {
		$this->dId = $dId;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function setFname($fname) {
		$this->fname = $fname;
	}
	public function setLname($lname) {
		$this->lname = $lname;
	}
	public function setPhone($phone) {
		$this->$phone = $phone;
	}
	public function setAddress1($address1) {
		$this->address1 = $address1;
	}
	public function setAddress2($address2) {
		$this->address2 = $address2;
	}
	public function setGender($gender) {
		$this->gender = $gender;
	}
	public function setDob($dob) {
		$this->dob = $dob;
	}
	public function setIllnessTest($illnessTest) {
		$this->illnessTest = $illnessTest;
	}
	public function setLLatitude($lLatitude) {
		$this->lLatitude = $lLatitude;
	}
	public function setLLongitude($lLongitude) {
		$this->lLongitude = $lLongitude;
	}
	public function setBType($bType) {
		$this->bType = $bType;
	}
	public function setDState($dState) {
		$this->dState = $dState;
	}
	public function setCenter($center) {
		$this->center = $center;
	}
	public function setNic($nic) {
		$this->nic = $nic;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	// End of setter functions
}
