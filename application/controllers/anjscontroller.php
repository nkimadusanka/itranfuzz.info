<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anjscontroller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('center');
	}
	/* loading home page tile*/
	public function index(){
		$this->load->view('anjs/home_tile');
	}
	/* tiles for donor manage management*/
	public function donor_tile(){
		$this->load->view('anjs/donor_tile');
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
		$this->load->view('anjs/view_staff');
	}
}

