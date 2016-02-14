
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

          <!--Content-->
          <div class="container">
            <div class="col-md-6 col-md-offset-3">
              <div class="row center" id="form-signup">
                <center>
                  <h1>สมัครเข้าค่าย</h1></center>
                <?php echo Form::open(array('url' => 'auth/register')); ?>
                 @if ($provider != "facebook")
                  <center>
                      <a href="{{ url('auth/connect/facebook') }}">
                          <img src="<?php echo url(""); ?>/themes/itim_world/assets/img/facebook.png" alt="" width="400">
                      </a>
                  </center>
                  <br>
                  <hr>

                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">อีเมล</label>
                    <input type="email" class="form-control" id="" placeholder="กรอกอีเมลล์" name="email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="" placeholder="กรอกรหัสผ่าน" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  @else

                  <center>
                       <img class="img-circle img-responsive" src="{{ array_get($user, 'avatar') }}">
                       <h1>{{ array_get($user, 'name') }}</h1>
                  </center>
                        <input type="hidden" name="email" value="{{ array_get($user, 'email') }}" />
                  @endif



                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">ชื่อ (ภาษาไทย)</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกชื่อภาษาไทย" name="name_th" value="{{ (isset($user)? array_get($user, 'user.first_name') : '' ) }}">
                    @if ($errors->has('name_th'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name_th') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">นามสกุล (ภาษาไทย)</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกนามสกุลภาษาไทย" name="lastname_th" value="{{ (isset($user)? array_get($user, 'user.first_name') : '' ) }}">
                    @if ($errors->has('lastname_th'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname_th') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="" placeholder="เลขบัตรประจำตัวประชาชน" name="citizen_id">
                    @if ($errors->has('citizen_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('citizen_id') }}</strong>
                        </span>
                    @endif
                  </div>
                  <input type="hidden" name="provider" value="{{ $provider }}" />
                  <input type="hidden" name="wip_id" value="{{ array_get($user, 'wip_id') }}" />
                  <center>
                    <button type="submit" class="next">สมัครเลย</button>
                  </center>
                <?php echo Form::close(); ?>

              </div>
            </div>
            <!--End Content-->
          </div>
        </div>
        <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
          Chat
        </div>
      </div>
