<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Testcontroller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}
	//testing method database
	public function testmysql(){
<<<<<<< HEAD
		$this->load->model('employee');
		$q = $this->employee->getEmployeeByfname("Chamara");
		print_r($q);
=======
		header ( 'Content-type: application/json' );
		$this->load->model('center');
>>>>>>> 5ced06c5dde95ac5f4fe805e643478ecc54adc71
	}
}