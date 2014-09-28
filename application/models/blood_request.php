<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bood_request extends CI_model{
	var $brId;
	var $bType;
	var $eDate;
	var $eTime;
	var $amount;
}<html>
<head>
</head>

<body>
Add Blood Request: <br><br>

Description : <br> 
<textarea name="Description" rows="5" cols="60">
</textarea>
<br><br>

Blood Type :
<select name ="Blood Type">                 
	<option>A+</option>                  
	<option>A-</option>                                   
	<option>B+</option>                  
	<option>B-</option> 
	<option>AB+</option>                  
	<option>AB-</option>                  
	<option>O+</option>
	<option>O-</option>
</select> <br><br>

Date : 
<input type="date" id="datepicker" name='from' size='8' value="" /> 
<br><br>


<form action="demo_form.asp">
End Time :
  <input type="time" name="usr_time">
</form>
<br><br>

Expect Participation: 
<textarea name="Description" rows="1" cols="6">
</textarea>
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