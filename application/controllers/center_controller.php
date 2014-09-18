<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Center_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'center' );
	}
	
	public function getallcenters(){
		$status = null;
		header ( 'Content-type: application/json' );
		$status = $this->center->getAllCenters();
		echo json_encode($status);
	}
}