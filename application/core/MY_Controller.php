<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_GenController extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->view('include/header');
    }

	public function loadFooter()
	{
		$this->load->view('include/footer');
	}
}