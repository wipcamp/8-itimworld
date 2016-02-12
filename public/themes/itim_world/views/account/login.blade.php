
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
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-md-6">
              <h1>Login</h1>
              <?php echo Form::open(array('url' => 'accounts/login/email')); ?>
              <div class="form-group">
                <label for="">Email address</label>
                <input type="email" class="form-control" id="" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Password" name="password">
              </div>
                <input type="submit" value="Login" style="font-size:1.7em;">
              <?php echo Form::close(); ?>
              <center><a href="" style="color:#fff;">Forget Password</a></center>
              <hr>
              <center>
                <a href= "<?php echo url("accounts/login/facebook"); ?>"><img src="<?php echo url(""); ?>/themes/itim_world/assets/img/facebook.png" alt=""></a>
              </center>
            </div>
            <div class="col-sm-6">
              <div class="col-sm-6">
                <div class="center">
                  <center>
                    <a href="<?php echo url("account/register"); ?>"><img src="<?php echo url(""); ?>/themes/itim_world/assets/img/regis.png"  width="400"></a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
        Chat
      </div>
    </div>
