<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation_method extends CI_model{
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
}
<html>
<head>
</head>

<body>

Add Event: <br><br>

Description : <br> 
<textarea name="Description" rows="5" cols="60">
</textarea>
<br><br>

Organizational Name : 
<INPUT TYPE="TEXT" NAME="Name" SIZE="30"> 
<br><br>

Address 1 : 
<INPUT TYPE="TEXT" NAME="Add1" SIZE="30"> 
<br><br>

Address 2 : 
<INPUT TYPE="TEXT" NAME="Add2" SIZE="30"> 
<br><br>

Location :

<br><br>

Phone : 
<input type="tel">
<br><br>

Date : 
<input type="date" id="datepicker" name='from' size='8' value="" /> 
<br><br>


<form action="demo_form.asp">
Start Time :
  <input type="time" name="usr_time">
</form>
<br><br>

<form action="demo_form.asp">
End Time :
  <input type="time" name="usr_time">
</form>
<br><br>

Expect Participation: 
<INPUT TYPE="TEXT" NAME="Add2" SIZE="20"> 
<br><br>

Broadcast Message : <br>
<textarea name="Description" rows="5" cols="60">
</textarea>
<br><br>

Broadcast Message Type : <br>
<INPUT TYPE="CHECKBOX" NAME="email"> E-Mail
<INPUT TYPE="CHECKBOX" NAME="mobileApplication"> Mobile Application 
<INPUT TYPE="CHECKBOX" NAME="SMS"> SMS
<br><br>

<INPUT TYPE="SUBMIT" VALUE="Add Broadcast Message"> 
<INPUT TYPE="RESET" VALUE="Clear">


</body>
</html>