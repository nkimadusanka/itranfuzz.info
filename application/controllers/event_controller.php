<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );


class Event_controller extends CI_Controller{

	public function __contructor(){
		parent::__contructor();
		$this->load->model('event');
	}

	public function addEvent(){

		$this->event->addEvent();

		echo $this->input->post("description");
		echo $this->input->post("orgName");
		echo $this->input->post("eParticipation");
		echo $this->input->post("address1");
		echo $this->input->post("address2");
		echo $this->input->post("phone");
		echo $this->input->post("date");
		echo $this->input->post("stime");
		echo $this->input->post("lat");
	}

}