<!DOCTYPE html>
<html>
    <head>
        <title>WIP Camp #8 : Ways to IT Professional Camp : ค่ายเส้นทางสู่ฝันสู่นัก ไอที</title>
        <link rel="icon" type="image/png" href="<?php echo url(""); ?>/themes/itim_world/assets/img/favicon.ico">
        {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap.min.css')!!}
        {!!HTML::style('themes/itim_world/assets/css/bootstrap/bootstrap-themes.css')!!}
        {!!HTML::style('themes/itim_world/assets/css/style.css')!!}
        <meta property="og:title" content="WIP Camp #8 : Ways to IT Professionals Camp : ค่ายเส้นทางสู่ฝันนักไอที ">
       <meta property="og:type" content="company">
       <meta property="og:url" content="http://wip.camp/">
       <meta property="og:image" content="assets/img/fb.jpg">
       <meta property="og:site_name" content="WIP Camp #8 : Ways to IT Professionals Camp : ค่ายเส้นทางสู่ฝันนักไอที">
       <meta property="og:description" content="WIP Camp #8 : Ways to IT Professionals Camp : ค่ายเส้นทางสู่ฝันนักไอที">
       <meta property="fb:page_id" content="250617067968">
       <meta property="fb:app_id" content="119399881422143">


        {!! Theme::asset()->styles() !!}

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
                <!-- Header -->
                {!! Theme::partial('header') !!}
            </div>
            {!! Theme::content() !!}
        </div>
        {!!HTML::script('themes/itim_world/assets/js/jquery-1.12.0.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/jquery.min.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.min.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/js/formValidation.min.js"></script>
        {!!HTML::script('themes/itim_world/assets/js/jquery.bootstrap.wizard.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        {!!HTML::script('themes/itim_world/assets/js/js.js')!!}
        {!! Theme::asset()->scripts() !!}
    </body>
</html>
