
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
                <?php echo Form::open(array('url' => 'account/register')); ?>
                  <center><img src="<?php echo url(""); ?>/themes/itim_world/assets/img/facebook.png" alt="" width="200"></center>
                  <hr>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">อีเมลล์</label>
                    <input type="email" class="form-control" id="" placeholder="กรอกอีเมลล์" name="email">
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">รหัสผ่าน</label>
                    <input type="password" class="password" id="" placeholder="กรอกรหัสผ่าน" name="password">
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">ชื่อ (ภาษาไทย)</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกชื่อภาษาไทย" name="name_th">
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">นามสกุล (ภาษาไทย)</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกชื่อภาษาไทย" name="surname_th">
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกชื่อภาษาไทย" name="cid">
                  </div>
                  <input type="submit" value="send">
                <?php echo Form::close(); ?>


                <!-- ถ้า Login ผ่าน Facebook จะเป็นฟอร์มข้างล่างนี้ -->

                <!-- <form action="" method="post">
                  <center>
                       <img class="img-circle img-responsive" src="assets/img/pro3.png">
                       <h1>Kunchai Sodhom</h1>
                  </center>
                  <hr>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">ชื่อ (ภาษาไทย)</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกชื่อภาษาไทย" name="">
                  </div>
                  <div class="form-group">
                    <span style="color:#ff0000;"> * </span><label for="">นามสกุล (ภาษาไทย)</label>
                    <input type="text" class="form-control" id="" placeholder="กรอกนามสกุลภาษาไทย" name="">
                  </div>
                    <input type="submit" value="send">
                </form> -->

              </div>
            </div>
            <!--End Content-->
          </div>
        </div>
        <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
          Chat
        </div>
      </div>
