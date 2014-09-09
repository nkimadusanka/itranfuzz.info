<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!--registration form to be submitted to the website-->
<form id="regForm" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Email</label>
                <input type="text" class="form-control" name="email" />
            </div>
            <div class="col-md-6">
                <label class="control-label">NIC</label>
                <input type="text" class="form-control" name="fname" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">First Name</label>
                <input type="text" class="form-control" name="fname" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Last Name</label>
                <input type="text" class="form-control" name="lname" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Address 1</label>
                <input type="text" class="form-control" name="address1" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Address 2</label>
                <input type="text" class="form-control" name="address2" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Password</label>
                <input type="text" class="form-control" name="password" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Re Enter Password</label>
                <input type="text" class="form-control" name="rpassword" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
        	<div class="col-md-4 selectContainer">
                <label class="control-label">Gender</label>
                <select class="form-control" name="sex">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" />
            </div>
            <div class="col-md-4 selectContainer">
                <label class="control-label">Blood Type</label>
                <select class="form-control" name="bType">
                    <option value="">Choose your blood type</option>
                    <option value="action">A+</option>
                    <option value="comedy">B+</option>
                    <option value="horror">A-</option>
                    <option value="romance">B-</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Profile Picture</label>
                <input type="file">
            </div>
            <div class="col-md-6">
                <label class="control-label">Select your location</label>
                <div id="map-canvas" style="height: 200px;width: 100%;"/>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-default">Register</button>
</form>
<!--End of the registration form-->

