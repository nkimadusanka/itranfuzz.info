<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Employee_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'employee' );
	}
	
	public function addEmployee() {
		$status = null;
		header ( 'Content-type: application/json' );
		if($this->input->post ("cId") == null){
			$cid = $this->employee->getEmployee($this->session->userdata("eId"))->getCenter();
		}else{
			$cid = $this->input->post ("cId");
		}
		$employee = array (
				"email" => $this->input->post ("email"),
				"password" => $this->input->post ("password"),
				"fname" => $this->input->post ("fname"),
				"lname" => $this->input->post ("lname"),
				"nic" => $this->input->post ("nic"),
				"gender" => $this->input->post ("sex"),
				"phone" => $this->input->post ("phone"),
				"address1" => $this->input->post ("address1"),
				"address2" => $this->input->post ("address2"),
				"type" => $this->input->post ("type"),
				"photo" => "defualt_profile_20.jpg",
				"center_cId" => $cid
		);
		if ($this->employee->addEmployee ($employee)) {
			$status = array("STATUS"=> 1);
		}else{
			$status = array("STATUS"=> 2);
		}
		echo json_encode($status);
	}
}