<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class Testingcontroller extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	}

	public function index(){
		$msg = '123456789';
		$encrypted_string = "DDZRMgJkBGoBZgNmAWBaOgZi";
		//echo $encrypted_string;
		$key = 'UyTHkbxiGCt2W4HzmtL0TRKMynDGEqYX';
		
		echo $this->encrypt->decode($encrypted_string, $key);
	}

}