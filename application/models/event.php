<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_model{
	var $evId;
	var $description;
	var $evType;
	var $center_cId;
	var $employee_eId;



public function addEvent($evId, $description, $evType,$center_cId,$employee_eId){
	$data = array('evId' => $evId,
'description'=> $description,
'evType'=> $evType,
'center_cId'=> $center_cId,
'employee_eId'=> $employee_eId);


return($this->db->insert('event',$data));


}

public function deleteEvent(){

	$this->db->where('evId', $evId);
$this->db->delete('event'); 
}


public function viewEvent(){}

public function updateEvent($evId, $description, $evType,$center_cId,$employee_eId){
	$data = array('evId' -> $evId,
'description'-> $description,
'evType'-> $evType,
'center_cId'-> $center_cId,
'employee_eId'-> $employee_eId);


return($this->db->update('event',$data));
}



public function set_evId($evId){
	$this -> evId= $evId;
}


public function set_description($description)
{$this -> Description=$description;
}


public function set_evType($evType)
{
$this -> evType=$evType;
}



public function setcenter_cId($center_cId)

{
$this -> center_cId=$center_cId;
}

public function setemployee_eId($employee_eId){
$this -> employee_eId=$employee_eId;
}
 

 public function getevId(){
	return ($this->evId);}

 

 public function getdescription (){
 	return ($this-> description);
public function getevType(){
 return ($this -> evType);


}


public function getcenter_cId(){

return ($this -> center_cId);


}


public function getemployee_eId(){

return ($this-> employee_eId);

}













 }

}
