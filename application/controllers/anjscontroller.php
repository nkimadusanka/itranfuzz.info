<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anjscontroller extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('anjs/home_tile');
	}
	public function donor_tile(){
		$this->load->view('anjs/donor_tile');
	}
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
}

