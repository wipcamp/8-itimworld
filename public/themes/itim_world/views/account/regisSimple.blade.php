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
            <center>
                <div class="logo-wip">
                   <div class="row">
                       <img src="http://itim.wip.loc/themes/itim_world/assets/img/layout/finalwip.png" alt="" width="40%">
                   </div>
                   <div class="row">
                       <img src="http://itim.wip.loc/themes/itim_world/assets/img/layout/finalway.png" alt="" width="30%" style="margin-top:-4%">
                   </div>
                </div>
            </center>

        <!--Content-->
        <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="row">
               <h1>สมัครเข้าค่าย</h1>
               <?php
                   echo Form::open(array('url'=>'account/register'));
                ?>
                <div class="col-md-6">
                    อีเมลล์
                    <input type="email" class="form-control" placeholder="Text input" name="email"><br>
                    รหัสผ่าน
                    <input type="password" class="form-control" placeholder="Text input" name="password"><br>
                    รหัสผ่านอีกครั้ง
                    <input type="password" class="form-control" placeholder="Text input" name="repassword"><br>
                    วันเกิด
                    <input type="dob" class="form-control" placeholder="Text input" name="dob"><br>
                </div>
                <div class="col-md-6">
                    ชื่อ
                    <input type="text" class="form-control" placeholder="Text input" name="name_th"><br>
                    นามสกุล
                    <input type="text" class="form-control" placeholder="Text input" name="surname_th"><br>
                    ชื่อเล่น
                    <input type="text" class="form-control" placeholder="Text input" name="nickname"><br>
                    อัพโหลดรูปภาพ
                    <input type="file" class="form-control" placeholder="Text input" name="avatar"><br>
                    <br>
                    <br>
                    <button type="submit" class="primary" style="float:right;">Submit</button>
                </div>
                <?php
                    echo Form::close();
                ?>
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
