<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- Modal -->
<div class="modal fade" id="loginModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- This is model header-->
            <div class="modal-header"  style="background-color: @brand-primary;">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">
                    Login
                </h4>
            </div>
            <!--This is content of the model-->
            <div class="modal-body">
                <!--This is login form-->
                <form id="loginForm" method="post" class="form-horizontal" action="<?php echo base_url();?>webapi/jlogin">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Email address</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-7">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>
                    <div id="logerror" class="form-group" style="visibility: hidden;">
                        <div class="col-md-5 col-md-offset-3">
                            <p class="text-danger">Invalid username or password</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-3">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--This is footer of the model-->
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



