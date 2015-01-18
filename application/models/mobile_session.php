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
		$event['mseId'] = parent::addEvent($event['description'], 'ms',$event['cId'],$event['eId']);

		unset($event['description']);
		unset($event['cId']);
		unset($event['eId']);

		$this->db->insert('mobile_session',$event);
	}

	public function addBloodRequest($request){

		$request['brId'] = parent::addEvent($request['description'], 'br',$request['cId'],$request['eId']);

		unset($request['description']);
		unset($request['cId']);
		unset($request['eId']);

		return($this->db->insert('blood_request',$request));

	}

	public function getTodayEventsByCId($cId){

		$date = date("Y-m-d");
		$this->db->where('date',$date);
		$query = $this->db->get('mobile_session');

		if($query->num_rows > 0){
			return $query->result();
		}else{
			return NULL;
		}
	}

}