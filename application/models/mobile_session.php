<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_session extends MY_Model{
	var $mseId;
	var $orgName;
	var $address1;
	var $address2;
	var $phone;
	var $date;
	var $stime;
	var $etime;
	var $lLongitude;
	var $lLatitude;
	var $eParticipation;

	public function __construct(){
		parent::__construct();
	}

	public function addSession($event){
		$sid = parent::addEvent($event['description'], 'ms',$event['cId'],$event['eId']);
	}

}