<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Participate extends CI_model{
	var $donor_dId;
	var $event_evId;
	var $donation_method_dmId;

	public function addParticipate($donor_dId,$event_evId,$donation_method_dmId){

		$data = array (
			'donor_dId' => $donor_dId,
			'event_evId' => $event_evId,
			'donation_method_dmId' => $donation_method_dmId
		);
		
		$this->db->insert ( 'participate',$data);
		return $this->db->affected_rows () ? true : false;

	}

	public function getParticipateList($donor_dId){
		
		$comd = "SELECT * FROM participate p, mobile_session ms WHERE p.event_evId = ms.mseId AND p.donor_dId = ".$donor_dId." AND ms.date - DATE < 90";
		$query = $this->db->query($comd);

		if($query->num_rows > 0)
			return $query->result();
		else
			return null;

	}

	public function getParticipate($event_evId){

		$comd = "SELECT fname,lname,address1,address2,donor_dId,event_evId,donation_method_dmId,email FROM participate p, donor d WHERE p.donor_dId = d.dId AND p.event_evId =".$event_evId;

		$query = $this->db->query($comd);

		if($query->num_rows > 0)
			return $query->result();
		else
			return null;
	}

	public function deletePart($donor_dId,$event_evId){

		$this->db->where('donor_dId',$donor_dId);
		$this->db->where('event_evId',$event_evId);

		$this->db->delete('participate');

		return $this->db->affected_rows () ? true : false;
	}

	public function getPartsByDonorID($dId){

		$comd = "SELECT * FROM participate p, mobile_session ms, donation_method dm WHERE p.event_evId = ms.mseId AND p.donation_method_dmId = dm.dmId AND p.donor_dId = ".$dId;

		$query = $this->db->query($comd);

		if($query->num_rows > 0)
			return $query->result();
		else
			return null;
	}

}