<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_GenController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		if($this->check_isvalidated()){
			//add register form to welcome page
			$data = null;
			$data['register_form'] = $this->load->view('/form/register_form',$data,TRUE);
			$this->load->view('welcome',$data);
			$this->load->view('/form/loginmodel');
		}else{
			$this->load->view('main');
		}
		$this->loadFooter();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */