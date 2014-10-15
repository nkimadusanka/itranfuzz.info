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
	var $center;

	#constructor of employees
	public function __construct($row = NULL){
		//loading instance of models
		$CI =& get_instance();
		$CI->load->model('Center');
		
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
			$this->center = $CI->Center->getCenterById($row->center_cId);
		}
	}
	
	/*get employee by gender*/
	public function getEmployeeByGender($gender){
		$this->db->where('gender',$gender);
		$rows = $this->db->get('employee');
		if($rows->num_rows > 0){
			return $rows->result();
		}else{
			return NULL;
		}
	}

	/*get employee by center_id*/
	public function getEmployeeByCenter($center_cId){
		$this->db->where('center_cId',$center_cId);
		$rows=$this->db->get('employee');
		if($rows->num_rows>0){
			return $rows->result();
		}
		else{
			return NULL;
		}
	}

	/*get all employees*/
	public function getAllEmployees(){
		$query = $this->db->query("SELECT * FROM employee e JOIN center c ON  e.center_cId = c.cId");
		if($query->num_rows > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

	/*get employee by first name*/
	public function getEmployeeByFname($fname){
		$this->db->where('fname',$fname);
		$rows=$this->db->get('employee');
		if($rows->num_rows>0){
			return $rows->result();
		}
		else{
			return NULL;
		}
	}

	/*get employee by last name*/
	public function getEmployeeByLname($lname){
		$this->db->where('lname',$lname);
		$rows=$this->db->get('employee');
		if($rows->num_rows>0){
			return $rows->result();
		}
		else{
			return NULL;
		}
	}

	/*get employee by NIC number*/
	public function getEmployeeByNic($nic){
		$this->db->where('nic',$nic);
		$rows=$this->db->get('employee');
		if($rows->num_rows>0){
			return $rows->result();
		}
		else{
			return NULL;
		}
	}

	/*get employee by address1*/

	public function getEmployeeByAddress1($address1){
		$this->db->where('address1',$address1);
		$rows=$this->db->get('employee');
		if($rows->num_rows>0){
			return $rows->result();
		}
		else{
			return NULL;
		}
	}

	/*get employee by address2*/

	public function getEmployeeByAddress2($address2){
		$this->db->where('address2',$address2);
		$rows=$this->db->get('employee');
		if($rows->num_rows>0){
			return $rows->result();
		}
		else{
			return NULL;
		}
	}
	
	
	/*get all employees as a Employee list*/
	public function getAllEmployeesList(){
		$query = $this->db->get("employee");
		if($query->num_rows > 0){
			return $this->getList($query->result());
		}else{
			return NULL;
		}
	}
	
	/* get donor by id*/
	
	public function getEmployee($id){
		$this->db->where('eId', $id);
		$rows = $this->db->get('employee');
		if($rows->num_rows() > 0){
			return new Employee($rows->first_row());
			}else{
			return null;
		}
	}	
		
	/*add new employee to the system*/
	public function addEmployee($employee){
		$data = array(
   'id' => '$id' ,
   'email' => '$email',
   'pwd'=> '$pwd',
   'fname'=>'$fname',
   'lname'=> '$lname',
   'nic'=>'$nic',
   'gender'=>'$gender',
   'phone'=>'$phone',
   'address1'=>'$address1',
   'address2'=>'$address2',
   'type'=>'$type',
   'photo'=>'$photo',
   'center_cId'=> '$center_cId'
);
		return($this->db->insert('employee',$data));
	}

	public function deleteEmployee($employee){
		$this->db->where('eId', $eId);
$this->db->delete('employee'); 
	}


public function updateEmployee($employee){
	
		$data = array(
   'id' => '$id' ,
   'email' => '$email',
   'pwd'=> '$pwd',
   'fname'=>'$fname',
   'lname'=> '$lname',
   'nic'=>'$nic',
   'gender'=>'$gender',
   'phone'=>'$phone',
   'address1'=>'$address1',
   'address2'=>'$address2',
   'type'=>'$type',
   'photo'=>'$photo',
   'center_cId'=> '$center_cId'
   );

$this->db->update('employee', $data); 

	}


	
	/*get employee by email*/
	public function getEmployeeByEmail($email){
		
		$this->db->where('email', $email);
		$rows = $this->db->get('employee');
		
		if($rows->num_rows() > 0){
			return new Employee($rows->first_row());
		}else{
			return null;
		}
	}
	
	#add getter methods
	
	public function getEId($EId){
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
	#********************************************start of setter methods****************************************************
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