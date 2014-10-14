<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
class Privateapi extends CI_Controller {
	var $status;
	public function __construct() {
		parent::__construct ();
		header ( 'Content-type: application/json' );
		
		// loading models to control
		$this->load->model ( 'center' );
		$this->load->model ( 'donor', 'employee' );
		
		// check user login type
		if ($this->check_isvalidated ()) {
			$this->status = array (
					"STATUS" => "1" 
			);
		} else {
			$this->status = array (
					"STATUS" => "2" 
			);
		}
	}
	public function addCenter() {
		// set content type to json
		header ( 'Content-type: application/json' );
		// loading login model
		$this->center->addcenter( array (
				"province" => $this->input->post ( "province" ),
				"address1" => $this->input->post ( "address1" ),
				"address2" => $this->input->post ( "address2" ),
				"phone" => $this->input->post ( "phone" ),
				"lLongitude" => $this->input->post ( "lng" ),
				"lLatitude" => $this->input->post ( "lat" ),
				"type" => $this->input->post ( "ctype" ) 
		) );
		echo json_encode($this->status);
	}
	
	/* Check login is have session or not */
	public function check_isvalidated() {
		if ($this->session->userdata ( 'validated' )) {
			return (true);
		} else {
			return (false);
		}
	}
}