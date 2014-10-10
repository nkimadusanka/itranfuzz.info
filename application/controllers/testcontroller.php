<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Testcontroller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}
	//testing method database
	public function testmysql(){
		header ( 'Content-type: application/json' );
		$this->load->model('center');
	}
}