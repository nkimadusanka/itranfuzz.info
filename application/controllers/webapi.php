<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webapi extends CI_Controller {

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
}

/* End of file welcome.php */