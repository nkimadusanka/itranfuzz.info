<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anjscontroller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('mobile_session');
		$this->load->model('blood_request');
		$this->load->model('center');
	}
	/* loading home page tile*/
	public function index(){
		$data["events"] = $this->mobile_session->getTodayEvents();
		$data["uevents"] = $this->mobile_session->getUpcomming();
		$data["pevents"] = $this->mobile_session->getpast();
		$this->load->view('anjs/home_tile',$data,FALSE);
	}
	/* tiles for donor manage management*/
	public function adddonor_tile(){
		$data = null;
		$data['centers'] = $this->center->getAllCenters();
		$data['adddonor_form'] = $this->load->view('/form/register_form',$data,TRUE);
		$this->load->view('anjs/add_donor',$data);
	}
	public function viewdonor_tile(){
		$this->load->view('anjs/view_donor');
	}
	/* tiles for cluster manage management*/
	public function addcluster_tile(){
		$data = null;
		$data['addcluster_form'] = $this->load->view('/form/addclusterform',$data,TRUE);
		$this->load->view('anjs/add_cluster',$data);
	}
	public function updatecluster_tile(){
		$this->load->view('anjs/update_cluster');
	}
	public function removecluster_tile(){
		$this->load->view('anjs/remove_cluster');
	}
	public function viewcluster_tile(){
		$this->load->view('anjs/view_cluster');
	}
	/*tiles for staff management*/
	public function addstaff_tile(){
		$data = null;
		$data['centers'] = $this->center->getAllCenters();
		$data['addstaffForm'] = $this->load->view('/form/addstaffForm',$data,TRUE);
		$this->load->view('anjs/add_staff',$data);
	}
	public function updatestaff_tile(){
		$this->load->view('anjs/update_staff');
	}
	public function removestaff_tile(){
		$this->load->view('anjs/remove_staff');
	}
	public function viewstaff_tile(){
		$data = null;
		$data['centers'] = $this->center->getAllCenters();
		$data['addstaffForm'] = $this->load->view('/form/addstaffForm',$data,TRUE);
		$this->load->view('anjs/view_staff',$data);
	}
	public function addbloodrequest(){
		$this->load->view('anjs/blood_request');
	}
	public function method_registration(){
		$this->load->view('anjs/method_registration');
	}
	public function addevent(){
		$data['centers'] = $this->center->getAllCenters();
		$this->load->view('/anjs/add_event',$data);
	}
	public function mangpart(){
		$this->load->view('anjs/manage_part');
	}
	public function viewpart(){
		$this->load->view('anjs/view_part');
	}
	public function viewhist(){
		$this->load->view('anjs/view_histry');
	}
}

