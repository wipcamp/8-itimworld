
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
            <div class="col-md-12" style="margin-top:10%">
              <div class="col-sm-6" style="margin-top:20%">
                <div class="col-xs-12 conditiontext">
                  <center>
                       <h1>เงื่อนไขในการสมัครค่าย WIP Camp #8</h1>
                  </center>
                    <h3>
                    <ol><li>น้องๆจะต้องกำลังศึกษาอยู่ชั้นมัธยมศึกษาปีที่ 3 หรือ 4 หรือ 5 ในปีการศึกษา 2558</li>
                    <li>หลังจากกรอกข้อมูลเรียบร้อยแล้ว น้องๆจะต้องอัปโหลดเอกสาร ดังต่อไปนี้เข้าระบบ</li>
                      <ul class="dash">
                        <li> เอกสาร ปพ.1 (น้องๆสามารถติดต่อขอได้จากทางโรงเรียนของน้อง)</li>
                        <li> เอกสารอนุญาตจากผู้ปกครอง (สามารถดาวโหลดได้ในระบบ)</li>
                      </ul>
                      <li>น้องๆ จะต้องทำภารกิจให้ครบทั้ง 8 ข้อ และ<b>อัปโหลดเอกสารจนมีสถานะว่าเอกสารถูกต้อง</b> จึงจะมีสิทธิได้รับการคัดเลือก</li>
                    <li>น้องๆ <b>จะต้องได้รับการอนุญาตจากผู้ปกครอง</b> ในการเข้าร่วมค่ายระหว่างวันที่ 25-29 พฤษภาคม 2559</li>
                    <li>น้องๆ ที่ได้รับคัดเลือกเข้าร่วมค่ายจะต้องเสียค่าใช้จ่าย <b>เป็นจำนวน 450 บาท</b> ซึ่งเป็นค่าที่พัก(ห้องแอร์) และค่าอาหารภายในค่าย </li>
                    <li>หากมีข้อสงสัยสามารถสอบถามได้ที่ เบอร์โทรศัพท์ 06-2931-1726 (พี่เมย์) 06-2931-1727 (พี่แหวน) หรือช่องทางติดต่ออื่นๆของทางค่าย</li>
                    </ol>
                    </h3>
                </div>
              </div>
              <div class="col-sm-6">
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
            </div>
            <!--End Content-->
          </div>
        </div>
        <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
        </div>
      </div>
