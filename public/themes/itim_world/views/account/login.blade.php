 
    <div class="container-fluid">
            <div id="scene">
                <div class="layer layout">
                    <div class="town">
                        <div class="town-front"></div>
                    </div>
                </div>
                <div class="layer layout">
                    <div class="town">
                        <div class="town-mid"></div>
                    </div>
                </div>
                <div class="layer layout" style="z-index:-3;">
                    <div class="town">
                        <div class="town-back"></div>
                    </div>
                </div>
            <center>
                <div class="logo-wip">
                   <div class="row">
                       <img src="<?php echo url(""); ?>/themes/itim_world/assets/img/layout/finalwip.png" alt="" width="40%">
                   </div>
                   <div class="row">
                       <img src="<?php echo url(""); ?>/themes/itim_world/assets/img/layout/finalway.png" alt="" width="30%" style="margin-top:-4%">
                   </div>
                </div>
            </center>
                <div class="row">
                <div class="col-md-6">
                    <h1>Login</h1>
                        
                    <?php echo Form::open(array('url' => 'account/login/email')); ?>
                      <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" id="" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="" placeholder="Password" name="password">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    <?php echo Form::close(); ?>
                   <hr>
                   <center>
                       <a href= "<?php echo url("account/login/facebook"); ?>"><img src="<?php echo url(""); ?>/themes/itim_world/assets/img/facebook.png" alt=""></a>
                   </center>
                </div>
                <div class="col-md-6">
                    <h1>Register</h1>
                    <center>
                        <button type="button" class="btn btn-warning">สมัครผ่าน Email</button> OR 
                        <button type="button" class="btn btn-primary">สมัครผ่าน Facebook</button>
                    </center>
                </div>
            </div>
            </div>
            <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
                Chat
            </div>
        </div>