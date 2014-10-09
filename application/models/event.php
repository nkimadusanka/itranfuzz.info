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
<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
    <body>
	    <div class="modal-body">
            <ul class="nav nav-tabs">
	            <li><img src="#" height="50" width="200"  /><li>
		        <li>
                    <input type="text" class="span3 search-query" class="icon-search icon-black" placeholder="Search"/> 
                <li>
                <li><a href="#">Home</a><li>
	            <li><a href="#">Profile</a><li>
	            <li><a href="#">Settings</a><li>
		        <li><img src="defualt_profile_20.jpg" height="50" width="50"/><li>
	        </ul>
		</div>
        <div class="col-md-2">		
            <nav>
                <ul class="nav nav-pills nav-stacked span3">
                    <li><a href="#">Manage Cluster</a><li>
	                <li><a href="#">Manage Cluster Staff</a><li>
	                <li><a href="#">Manage Event</a><li>
		            <li><a href="#">Manage Donor</a><li>
		            <li><a href="#">Manage Setting</a><li>
	            </ul>
	        </nav>
		</div>
		<div class="row">
            <div class="col-md-8">			
                <div class="modal-body">
                    <form class="well">
                        <h1><label>Add Event</label></h1><br><br>
                            <label>Description</label><br> 
                                <textarea name="Description" placeholder="Type your description here" rows="5" cols="60">
                                </textarea><br><br>
                            <label>Organization Name</label>
                                <input type="text" name="Organization_Name" class="span3"/><br><br>
                            <label>Address 1</label>
                                <input type="text" name="Address" class="span3"/><br><br>
                            <label>Address 2</label>
                                <input type="text" name="Address" class="span3"/><br><br>
                            <label>Location</label>
                                <input type="text" name="Address" class="span3"/><br><br>
                            <label>Phone</label>
                                <input type="text" name="Phone" class="span3"/><br><br>
                            <label>Date</label>
                                <input type="date" name="from" class="span3"/><br><br>
                            <label>Start Time</label>
                                <input type="time" name="start_time" class="span3"/><br><br>
                            <label>End time</label>
                                <input type="time" name="End_time" class="span3"/><br><br>
                            <label>Expect Participation</label>
                                <input type="text" name="Expect_participation" class="span3"/><br><br>
                            <label>Broadcast Message</label><br>
                                <textarea name="Broadcast_Message" placeholder="Type your broadcast massage here" rows="5" cols="60">
	                            </textarea><br><br>
                            <button class="btn btn-primary">Add Broadcast Message</button> 
                            <button class="btn">Clear</button> 
                        </table>
                        </form>
                    </section>
			    </div>
            </div>
		</div>
        <div class="row">		
            <center>
                <footer>All copy right received 2014</footer>
		    </center>
		</div>
        <script src+"js/bootstrap.js"></script>
	
    </body>
</html>