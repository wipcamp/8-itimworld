<!DOCTYPE html>
<html>
<head>
  <title>WIP Camp #8 : Ways to IT Professional Camp : ค่ายเส้นทางสู่ฝันสู่นัก ไอที</title>
  <link rel="icon" type="image/png" href="<?php echo url(""); ?>/themes/itim_world/assets/img/favicon.ico">
  {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css')!!}
  {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap-themes.css')!!}
  {!!HTML::style('themes/itim_world/assets/css/style.css')!!}

  {!! Theme::asset()->styles() !!}

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
 <!-- Header -->
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
</div>
</div>
{!! Theme::content() !!}
</div>
{!!HTML::script('themes/itim_world/assets/js/jquery-1.12.0.js')!!}
{!!HTML::script('themes/itim_world/assets/js/jquery.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/bootstrap.min.js')!!}
{!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
{!!HTML::script('themes/itim_world/assets/js/jquery.bootstrap.wizard.js')!!}
{!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
{!!HTML::script('themes/itim_world/assets/js/js.js')!!}
{!! Theme::asset()->scripts() !!}
</body>
</html>
