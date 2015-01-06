<?php if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
class Donation_method extends CI_model {
	
	var $dmId;
	var $description;
	var $minAge;
	var $maxAge;
	var $weight;
	var $dParticipating;
	var $maxAmount;

	#add blood donation method
	public function addBloodMethod($method){
		echo 'testing';
		return($this->db->insert('donation_method',$method));
	}

	/* have problem with this methods

	# get Donation_method by dmId
	public function getDmId($dmId) {
		$this->db->where ( 'dmId', $dmId );
		$rows = $this->db->get ( 'donation_method' );
		if ($rows->num_rows () > 0) {
			return new Donation_method ( $rows->first_row () );
		} else {
			return null;
		}
	}
	
	// get Donation_method by minAge
	public function getMinAge($minAge) {
		$this->db->where ( 'minAge', $minAge );
		$rows = $this->db->get ( 'donation_method' );
		if ($rows->num_rows () > 0) {
			return new Donation_method ( $rows->first_row () );
		} else {
			return null;
		}
	}
	
	// get Donation_method by maxAge
	public function getMaxAge($maxAge) {
		$this->db->where ( 'maxAge', $maxAge );
		$rows = $this->db->get ( 'donation_method' );
		if ($rows->num_rows () > 0) {
			return new Donation_method ( $rows->first_row () );
		} else {
			return null;
		}
	}
	
	// get Donation_method by weight
	public function getWeight($weight) {
		$this->db->where ( 'weight', $weight );
		$rows = $this->db->get ( 'donation_method' );
		if ($rows->num_rows () > 0) {
			return new Donation_method ( $rows->first_row () );
		} else {
			return null;
		}
	}
	
	// get Donation_method by dParticipating
	public function getDParticipating($dParticipating) {
		$this->db->where ( 'dParticipating', $dParticipating );
		$rows = $this->db->get ( 'donation_method' );
		if ($rows->num_rows () > 0) {
			return new Donation_method ( $rows->first_row () );
		} else {
			return null;
		}
	}
	
	// get Donation_method by maxAmount
	public function getMaxAmount($maxAmount) {
		$this->db->where ( 'maxAmount', $maxAmount );
		$rows = $this->db->get ( 'donation_method' );
		if ($rows->num_rows () > 0) {
			return new Donation_method ( $rows->first_row () );
		} else {
			return null;
		}
	}
	*/
	
	// get methods for donation_method model
	public function getDmId() {
		return ($this->dmId);
	}
	public function geteDscription() {
		return ($this->description);
	}
	public function getMinAge() {
		return ($this->minAge);
	}
	public function getMaxAge() {
		return ($this->maxAge);
	}
	public function getWeight() {
		return ($this->weight);
	}
	public function getDParticipating() {
		return ($this->dParticipating);
	}
	public function getMaxAmount() {
		return ($this->maxAmount);
	}
	
	// set method for donation_method model
	public function setDmId($dmId) {
		$this->dmId = $dmId;
	}
	public function setDescription($description) {
		$this->description = $description;
	}
	public function setMinAge($minAge) {
		$this->minAge = $minAge;
	}
	public function setMaxAge($maxAge) {
		$this->maxAge = $maxAge;
	}
	public function setWeight($weight) {
		$this->weight = $weight;
	}
	public function setDParticipating($dParticipating) {
		$this->dParticipating = $dParticipating;
	}
	public function setMaxAmount($maxAmount) {
		$this->maxAmount = $maxAmount;
	}
}
	