<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<title> This is my first Html5 Application </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		    @-webkit-viewport { width: device-width; }
		    @-moz-viewport { width: device-width; }
		    @-ms-viewport { width: device-width; }
		    @-o-viewport { width: device-width; }
		    @viewport { width: device-width; }
		</style>
        <script src="http://10.0.2.2/itranfuzz.info/js/mobile_js/jquery-1.10.2.min.js"></script>
        <script src="http://10.0.2.2/itranfuzz.info/js/mobile_js/jquery.mobile-1.4.0.min.js"></script>
		<link rel= "stylesheet" href = "http://10.0.2.2/itranfuzz.info/css/mobile_css/jquery.mobile-1.4.0.min.css"/>
		<link rel="stylesheet" href="http://10.0.2.2/itranfuzz.info/css/mobile_css/style.css"/>
        <script src="http://10.0.2.2/itranfuzz.info/js/mobile_js/main.js"></script>
	</head>
	<body data-theme="b">
        <!--Home tab details here-->
        <div data-role="page" id="home">
            <div data-role="header" data-position="fixed">
                <h1>Home</h1>
            </div>
             <div data-role="content">
                 <h4>Upcomming Events:</h4>
                <ul id="eventview" data-role="listview" data-inset="true">
                    <li data-role="list-divider">Today</li>
                    

<?php
if(count($events) == 0){
?>
                        <li >No events today</li>
<?php

}else{
    foreach ($events as $event) {
?>

                    <li><a href="#">
                        <img src="../../icons/event.png">
                    <h2>Location: <?php echo $event->address2?></h2>
                    <p>Date:<?php echo $event->date;?> Time:<?php echo $event->stime;?></p></a>
                    </li>
<?php
    }
}
?>


                </ul>
            </div>
            <div data-role="footer" data-position="fixed">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li><a href="#home" data-role="tab" data-icon="home" class="ui-btn-active ui-state-persist" >Home</a></li>
                        <li><a href="#histy" data-role="tab" data-icon="calendar" >History</a></li>
                        <li><a href="#profile" data-role="tab" data-icon="user" >Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Event view model-->
            <div id="page-1" data-role="page" data-position="fixed">
                <div data-role="header">
                    <a href="#" data-icon="arrow-l" data-iconpos="left" data-rel="back" data-transition="slide" data-direction="reverse">Back</a>
                    <h1>Event Details</h1>
                </div>
                <div data-role="content">
                    <div class="panel-content" style="text-align:left">
                        <img src="icons/calendar100.png"/>
                    </div>
                    <br/>
                    <div>
                        <div class="left" style="float:left"><h4>Organizer: Isuru Madusanka</h4></div>
                        <div class="right" style="float:right"><h4>Location: Kelaniya</h4></div>
                    </div>
                    <br/>
                    <div>
                        <div class="left" style="float:left"><h4>Date: 2014/08/15</h4></div>
                        <div class="right" style="float:right"><h4>Time: 8:00 AM</h4></div>
                    </div>
                    <br/>
                    <br/>
                    <div>
                        <div class="left" style="float:left"><h4>Description:</h4></div>
                    </div>
                    <br/>
                    <br/>
                    <div>
                        <p>
                            If you want to have superior control over your webapp, you first need to know their occurrence, sequence, usage and whether they can be delegated. Moreover, you need to differentiate between the ones that fire once per document, once per page and fire continuously. Once you understand the aforementioned bla bla bla, you will probably fall in love with those events.
                        </p>
                    </div>
                </div>
                <div data-role="footer" data-position="fixed">
                    <p></p>
                </div>
            </div>
        <!--Histroy tab details here-->
        <div data-role="page" id="histy">
            <div data-role="header" data-position="fixed">
                <h1>History</h1>
            </div>
            <div data-role="content">
                <table data-role="table" id="table-column-toggle" data-mode="columntoggle" class="ui-responsive table-stroke">
                 <thead>
                   <tr>
                     <th data-priority="4">Location</th>
                     <th data-priority="1">Date</th>
                     <th data-priority="2">Type</th>
                     <th data-priority="3">Time</th>
                   </tr>
                 </thead>
                 <tbody>
<?php foreach ($pList as $key) {?>
                <tr>
                    <td><?php echo $key->address1;?></td>
                    <td><?php echo $key->date;?></td>
                    <td><?php echo $key->description;?></td>
                    <td><?php echo $key->stime;?></td>
                </tr>
<?php }?>
                 </tbody>
               </table>
                <br/>
                <hr/>
                <div>
                    <div class="left" style="float:left">
                        <p>Number of Participate: 20</p>
                        <p>Donate Amount: 20 bottles</p>
                    </div>
                </div>
            </div>
            <div data-role="footer" data-position="fixed">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li><a href="#home" data-role="tab" data-icon="home" >Home</a></li>
                        <li><a href="#histy" data-role="tab" data-icon="calendar" class="ui-btn-active ui-state-persist" >History</a></li>
                        <li><a href="#profile" data-role="tab" data-icon="user">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Profile tab details in here-->
        <div data-role="page" id="profile">
            <div data-role="header" data-position="fixed">
                <h1>Profile</h1>
            </div>
            <div data-role="content">
                <div class="panel-content" style="text-align:center">
                    <img src="../../icons/prof100.png"/>
                </div>
                <h3 class="ui-bar ui-bar-a ui-corner-all">User Details</h3>
                <div class="ui-body ui-body-a ui-corner-all">
                      <p><b>Email: </b><?php echo $email?></p>
                      <p><b>Mobile Phone: </b><?php echo $phone?></p>
                      <p><b>Name: </b><?php echo $fname." ".$lname?></p>
                      <p><b>Date Of Birth: </b><?php echo $dob;?></p>
                      <p>
                          <b>Address:</b> <?php echo $address1." ".$address2?>
                    </p>
                </div>
                <br/>
                <button class="ui-btn">Logout</button>
            </div>
            <div data-role="footer" data-position="fixed">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li><a href="#home" data-role="tab" data-icon="home">Home</a></li>
                        <li><a href="#histy" data-role="tab" data-icon="calendar">History</a></li>
                        <li><a href="#profile" data-role="tab" data-icon="user" class="ui-btn-active ui-state-persist">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</body>
</htm>
