<div class="page-header">
  <h1>Add New Donor to System <small>Enter details about donor</small></h1>
</div>
<br/>
<!--registration form to be submitted to the website-->
<form id="regForm" method="post" action="donor_controller/do_donregister" ng-controller="donorControl">
<div class="form-group">
        <div class="row">
            <div class="col-md-offset-5">
                <label class="control-label">Profile Picture</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4">
                <img style="height:200px;margin-left:30px;" src = "<?php echo base_url()?>icons/defualt/photo_select.png"/>
            </div>
        </div>
</div>
<div class="form-group">
     <div class="row">
        <div class="col-md-6">
            <label class="control-label">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>
        <div class="col-md-6">
            <label class="control-label">NIC</label>
            <input type="text" class="form-control" name="nic" />
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
                <input type="password" class="form-control" name="password" />
            </div>

            <div class="col-md-6">
                <label class="control-label">Re Enter Password</label>
                <input type="password" class="form-control" name="rpassword" />
            </div>
        </div>
</div>
<div class="form-group">
        <div class="row">
        	<div class="col-md-3 selectContainer">
                <label class="control-label">Gender</label>
                <select class="form-control" name="sex">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="control-label">Date of Birth</label>
                <input type="date" class="form-control" name="dob" />
            </div>
            <div class="col-md-3 selectContainer">
                <label class="control-label">Blood Type</label>
                <select class="form-control" name="bType">
                    <option value="">Blood type</option>
                    <option value='ap'>A+</option>                  
                    <option value='am'>A-</option>                          
                    <option value='bp'>B+</option>                  
                    <option value='bm'>B-</option> 
                    <option value='abp'>AB+</option>                  
                    <option value='abm'>AB-</option>                  
                    <option value='op'>O+</option>
                    <option value='om'>O-</option>
                </select>
            </div>
            <div class="col-md-3 selectContainer">
                <label class="control-label">Nearest Center</label>
<?php if($centers != null){?>
                 <select class="form-control" name="cId">
                    <option value="">Select</option>
<?php foreach ($centers as $center) { ?>
                    <option value="<?= $center->cId?>"><?php echo $center->address1.' '.$center->address2."(".$center->province.")";?></option>
<?php }?>
                </select>
<?php }?>
            </div>
        </div>
</div>
<div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Profile Picture</label>
                <input type="file" name="photo">
            </div>
            <div class="col-md-6">
                <label class="control-label">Select your location</label>
                <div id="map-canvas" style="height: 200px;width: 100%;"/>
            </div>
        </div>
</div>
    <button type="submit" class="btn btn-default">Register</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>
<!--End of the registration form-->

