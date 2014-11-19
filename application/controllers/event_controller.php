<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Event_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('mobile_session');
		$this->load->model('employee');
	}

	public function addEvent(){

		$event["description"] = $this->input->post("description");
		$event["orgName"] = $this->input->post("orgName");
		$event["eParticipation"] = $this->input->post("eParticipation");
		$event["address1"] = $this->input->post("address1");
		$event["address2"] = $this->input->post("address2");
		$event["phone"] = $this->input->post("phone");
		$event["date"] = $this->input->post("date");
		$event["stime"] = $this->input->post("stime");
		$event["etime"] = $this->input->post("etime");
		$event["lat"] = $this->input->post("lat");
		$event["lng"] = $this->input->post("lng");
		$event["eId"] = $this->session->userdata("eId");

		$employee = $this->employee->getEmployee($event["eId"]);
		$event["cId"] = $employee->getCenter()->getCId();

		$this->mobile_session->addSession($event);
		
	}
}