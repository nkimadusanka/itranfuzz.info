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
	/*Check login is have session or not*/
	public function check_isvalidated(){
        if(!$this->session->userdata('validated')){
        	return(true);
        }else{
        	return(false);
        }
    }
    /*Login out function */
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
}