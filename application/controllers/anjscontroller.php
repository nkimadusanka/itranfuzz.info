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
}

