<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donor_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('donor');
	}
	
	//donor registration json response
	public function do_donregister(){
		//set content type to json
		header('Content-type: application/json');

		//responding json array
		$status = array("STATUS"=>"false");
		
		$state = $this->donor->addDonor(
				$this->input->post('email'),
				$this->input->post('nic'),
				$this->input->post('password'),
				$this->input->post('fname'),
				$this->input->post('lname'),
				"+9477094124",
				"defualt_profile_20.jpg",
				$this->input->post('address1'),
				$this->input->post('address2'),
				$this->input->post('sex'),
				$this->input->post('dob'),
				true,
				$this->input->post('lat'),
				$this->input->post('lng'),
				$this->input->post('bType'),
				'p',
				$this->input->post('cId'));
		//check the login
		if($state){
			$status = array("STATUS"=>"true");
		}
		echo json_encode($status);
	}

}