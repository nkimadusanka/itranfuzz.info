<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Event_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('mobile_session');
		$this->load->model('employee');
		$this->load->model('donation_method');
	}

	public function addEvent(){
		header ( 'Content-type: application/json');

		$event["description"] = $this->input->post("description");
		$event["orgName"] = $this->input->post("orgName");
		$event["eParticipation"] = $this->input->post("eParticipation");
		$event["address1"] = $this->input->post("address1");
		$event["address2"] = $this->input->post("address2");
		$event["phone"] = $this->input->post("phone");
		$event["date"] = $this->input->post("date");
		$event["stime"] = $this->input->post("stime");
		$event["etime"] = $this->input->post("etime");
		$event["lLongitude"] = $this->input->post("lat");
		$event["lLatitude"] = $this->input->post("lng");
		$event["eId"] = $this->session->userdata("eId");

		$employee = $this->employee->getEmployee($event["eId"]);
		$event["cId"] = $employee->getCenter()->getCId();

		$flag = $this->mobile_session->addSession($event);

		echo json_encode(array("STATUS"=>$flag));
		
	}
	public function addBloodReq(){
		$req['description'] = $this->input->post("description");
		$req['bType'] = $this->input->post("bType");
		$req['eDate'] = $this->input->post("eDate");
		$req['eTime'] = $this->input->post("eTime");
		$req['amount'] = $this->input->post("amount");

		$req["eId"] = $this->session->userdata("eId");
		$employee = $this->employee->getEmployee($req["eId"]);
		$req["cId"] = $employee->getCenter()->getCId();


		echo json_encode(array("STATUS"=>$this->mobile_session->addBloodRequest($req)));
	}

	public function addBloodMethod(){

		$method["description"] = $this->input->post("description");
		$method["minAge"] = $this->input->post("minAge");
		$method["maxAge"] = $this->input->post("maxAge");
		$method["weight"] = $this->input->post("weigth");
		$method["dParticipating"] = $this->input->post("dParticipating");
		$method["maxAmount"] = $this->input->post("maxAmount");


		echo json_encode(array ("STATUS"=>($this->donation_method->addBloodMethod($method))));

	}
}