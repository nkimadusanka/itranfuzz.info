<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Part_controller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->model('mobile_session');
		$this->load->model('employee');
		$this->load->model('center');
		$this->load->model('donor');
		$this->load->model('donation_method');
		$this->load->model('participate');
	}

	public function gettodayeventsbycid(){

		header ( 'Content-type: application/json');
		$employee = $this->employee->getEmployee($this->session->userdata("eId"));
		$cId = $employee->getCenter()->getCId();
		echo json_encode($this->mobile_session->getTodayEventsByCId($cId));

	}

	public function getparticipateList(){
		header ( 'Content-type: application/json');
		$employee = $this->employee->getEmployee($this->session->userdata("eId"));
		$cId = $employee->getCenter()->getCId();
		echo json_encode($this->mobile_session->getTodayEventsByCId($cId));
	}
	
	public function getdonationmethods(){
		header ( 'Content-type: application/json');
		$methods = $this->donation_method->getAllMethods();
		echo json_encode($methods);
	}

	public function checkusercan(){
		header ( 'Content-type: application/json');

		$flag = true;
		$email = $this->input->post('email');
		$donor = $this->donor->getDonorByEmail($email);

		if($donor == null)
			$flag = false;

		$dmethod = $this->input->post('donation_method_dmId');

		echo json_encode($flag);
	}

	public function addpart(){
		header ( 'Content-type: application/json');
		$flag = true;

		$email = $this->input->post('email');
		$donor = $this->donor->getDonorByEmail($email);
		$donation_method_dmId = $this->input->post('donation_method_dmId');

		$pList = $this->participate->getParticipateList($donor->dId);

		if(count($pList) > 0)
			$flag = false;
		else{
			$this->participate->addParticipate($donor->dId,$this->input->post('event_evId'),$donation_method_dmId);
		}

		echo json_encode(array("STATUS"=>$flag));
	}

	public function getParticipationList(){
		header('Content-type: application/json');

		$this->input->post('event_evId');
		$pList = $this->participate->getParticipate(26);

		echo json_encode($pList);
	}

	public function deletePart(){
		header('Content-type: application/json');

		echo $this->input->post("donor_dId"),$this->input->post("event_evId");

		$pList = $this->participate->deletePart($this->input->post("donor_dId"),$this->input->post("event_evId"));

		echo json_encode(array("STATUS"=>$pList));
	}

}