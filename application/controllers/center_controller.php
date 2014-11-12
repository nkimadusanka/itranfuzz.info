<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Center_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'center' );
	}
	//get all centers as a json
	public function getallcenters(){
		$status = null;
		header ( 'Content-type: application/json');
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
	public function updatecenter(){
		// set content type to json
		header ( 'Content-type: application/json' );
		// loading login model
		$result = $this->center->updatecenter( array (
				"cId" => $this->input->post ( "cId" ),
				"province" => $this->input->post ( "province" ),
				"address1" => $this->input->post ( "address1" ),
				"address2" => $this->input->post ( "address2" ),
				"phone" => $this->input->post ( "phone" ),
				"lLongitude" => $this->input->post ( "lng" ),
				"lLatitude" => $this->input->post ( "lat" ),
				"type" => $this->input->post ( "ctype" ) 
		) );
		echo json_encode(array("STATUS"=>$result));
	}
}