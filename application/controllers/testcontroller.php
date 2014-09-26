<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Testcontroller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}
	//testing method database
	public function testmysql(){
		header ( 'Content-type: application/json' );
		$this->load->model('employee');
		$employee = $this->employee->getAllEmployeesList();
		echo json_encode($employee);
		/*$class_methods = get_class_methods($donor);
		foreach ($class_methods as $method_name)
		{
			echo "$method_name<br/>";
		}
		echo '<h1>'.get_class($donor).'</h1>';
		echo 'this is from testing';*/
	}
}