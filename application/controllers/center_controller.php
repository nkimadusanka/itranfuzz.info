<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Center_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'center' );
	}
	//get all centers as a json
	public function getallcenters(){
		$status = null;
		header ( 'Content-type: application/json' );
		$status = $this->center->getAllCenters();
		echo json_encode($status);
	}
	public function removecenter(){
		$status = null;
		header ('Content-type: application/json');
		$jData = json_decode(file_get_contents('php://input'),true);
		// there will be foreing key error with employees
		$status = array('STATUS'=>($this->center->removecenterbyid($jData["cId"])));
		echo json_encode($status);
	}
}