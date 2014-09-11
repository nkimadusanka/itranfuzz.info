<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webapi extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('employee');
		$this->load->model('donor');
	}
	
	/*Check the email and password and pass valid or invalid*/
	public function jlogin(){

		//set content type to json
		header('Content-type: application/json');
		//loading login model
		$this->load->model('login_model');
		//responding json array
		$status = array("STATUS"=>"false");

		//check the login
		if($this->login_model->validate($this->input->post('email'),$this->input->post('password'))){
			$status = array("STATUS"=>"true");
		}
		echo json_encode($status);
	}
	public function jemailcheck(){
		
		header('Content-type: application/json');
		
		$email = $_POST['email'];
		$isAvailable = true;
		
		if(($this->donor->getDonorByEmail($email)) || ($this->employee->getEmployeeByEmail($email))){
			$isAvailable = false;
		}else{
			$isAvailable = true;
		}
		
		echo json_encode(
				array(
						'valid' => $isAvailable,
				)
		);
		
	}
}

/* End of file welcome.php */