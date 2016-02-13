
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
          <div class="col-xs-10 col-xs-offset-1">
            <div class="col-xs-6">
              <h1>Login</h1>
              <?php echo Form::open(array('url' => 'auth/login')); ?>
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
              <br>
              <hr>
              <br>
              <center>
                <a href= "<?php echo url("accounts/login/facebook"); ?>"><img src="<?php echo url(""); ?>/themes/itim_world/assets/img/facebook.png" alt="" width="400"></a>
              </center>
              <br>
            </div>
            <div class="col-xs-6">
              <div class="col-xs-6">
                <div class="col-xs-8 col-xs-offset-2">
                  <center>
                    <a href="<?php echo url("account/register"); ?>"><img src="<?php echo url(""); ?>/themes/itim_world/assets/img/regis.png"  width="450"></a>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
        Chat
      </div> -->
    </div>
