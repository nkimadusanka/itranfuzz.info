<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Testcontroller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}
	//testing method database
	public function testmysql(){
		$this->load->model('employee');
		$q = $this->employee->getEmployeeByGender("m");
		print_r($q);
	}
}