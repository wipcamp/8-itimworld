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
                </div>
                <!-- Header -->
                {!! Theme::partial('header') !!}
            </div>
            {!! Theme::content() !!}
        </div>
        {!!HTML::script('themes/itim_world/assets/js/jquery.min.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.min.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/jquery-1.12.0.js')!!}
        {!!HTML::script('themes/itim_world/assets/js/jquery.bootstrap.wizard.js')!!}
        <!-- {!!HTML::script('themes/itim_world/assets/js/js.js')!!} -->

        {!! Theme::asset()->scripts() !!}
    </body>
</html>
