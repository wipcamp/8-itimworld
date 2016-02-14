<!DOCTYPE html>
<html>
    <head>
        <title>WIP Camp #8 : Ways to IT Professional Camp : ค่ายเส้นทางสู่ฝันสู่นัก ไอที</title>
        <link rel="icon" type="image/png" href="<?php echo url(""); ?>/themes/itim_world/assets/img/favicon.ico">
        {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css')!!}
        {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap-themes.css')!!}
        {!!HTML::style('themes/itim_world/assets/css/style.css')!!}

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <div class="container">
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
                   <div class="layer layout" style="z-index:-1;">
                      <div class="town">
                         <div class="town-back"></div>
                      </div>
                   </div>
                </div>

            </div>

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

                    <!--Content-->
                        <div class="row">
                           <center>
                             <img src="<?php echo url(""); ?>/themes/itim_world/assets/img/wippo/Wippo-original-cry.png" alt="" width="250"/>
                               <h1>เกิด Error บางอย่างน้าา~</h1>
                               <h2>กดปุ่ม Back เพื่อย้อนกลับไปหน้าที่แล้วจ้า ~ </h2>
                              <br>
                              <div class="col-sm-4 col-sm-offset-4">
                                <a href="javascript:history.back();" class="btn btn-primary" style="font-size: 30px">ย้อนกลับไป ตั้งหลักใหม่</a>
                              </div>
                           </center>
                        </div>
                    <!--End Content-->
                        </div>
                        <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
                            Chat
                        </div>
                    </div>
        </div>
        {!!HTML::script('themes/itim_world/assets/js/jquery-1.12.0.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/jquery.min.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.min.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/js/formValidation.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        {!!HTML::script('themes/itim_world/assets/js/jquery.bootstrap.wizard.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        {!!HTML::script('themes/itim_world/assets/js/js.js')!!}
        {!! Theme::asset()->scripts() !!}
    </body>
</html>
