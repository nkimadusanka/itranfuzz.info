<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobilecontroller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('mobile_session');
		$this->load->model('blood_request');
		$this->load->model('center');
		$this->load->model('participate');
		$this->load->model('donor');
	}
	/* loading home page tile*/
	public function index($dEmail){
		$data["events"] = $this->mobile_session->getTodayEvents();
		$data["uevents"] = $this->mobile_session->getUpcomming();
		$data["pevents"] = $this->mobile_session->getpast();

		$donor = $this->donor->getDonorByEmail($dEmail);
		$data["pList"] = $this->participate->getPartsByDonorID($donor->dId);

		$data["email"] = $donor->email;
		$data["phone"] = $donor->phone;
		$data["fname"] = $donor->fname;
		$data["lname"] = $donor->lname;
		$data["dob"] = $donor->dob;
		$data["address1"] = $donor->address1;
		$data["address2"] = $donor->address2;

		$this->load->view('mobile/main_index',$data);
	}
}

