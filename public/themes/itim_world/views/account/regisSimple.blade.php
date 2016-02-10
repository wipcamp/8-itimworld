<html>
<head>
    <title>WIP Camp #8 : Ways to IT Professional Camp : ค่ายเส้นทางสู่ฝันสู่นัก ไอที</title>
    <link rel="icon" type="image/png" href="http://itim.wip.loc/themes/itim_world/assets/img/favicon.ico">
    {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css')!!}
    {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap-themes.css')!!}
    {!!HTML::style('themes/itim_world/assets/css/style.css')!!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
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
                <form action="" method="post">
                  <center><img src="http://itim.wip.loc/themes/itim_world/assets/img/facebook.png" alt="" width="200"></center>
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
                  <input type="submit" value="send">
                </form>


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

        <!-- Javascript -->
        {!!HTML::script('themes/itim_world/assets/js/jquery.min.js')!!}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>

</html>
