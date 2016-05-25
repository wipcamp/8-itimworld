<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WIP Camp #8 : Random< Nong itim</title><br>
    <script src="<?php echo url(""); ?>/themes/itim_world/assets/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="<?php echo url(""); ?>/themes/itim_world/assets/jquery.transit.min.js" type="text/javascript"></script>
    <script src="<?php echo url(""); ?>/themes/itim_world/assets/jquery.mixitup.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/main.css" />
    <link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/animate.css" />
    <link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/thaisansneue/fontface.css" />
    <script src="<?php echo url(""); ?>/themes/itim_world/assets/maintv2.js" type="text/javascript"></script>
  </head>
  <body>
    <center>
      <h1 style="font-size:40px; margin-top:3%; color:#fff;" class="animated pulse infinite">WIP Camp #8 : Random </h1>
      <div class="checkbox" style="color:#fff; font-size:20px;">
      {{ Form::open(array('url' => 'random/flavor')) }}
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/coffee.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '1', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/chocolate.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '2', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Green-tea.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '3', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Watermelon.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '4', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Blueberry.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '5', false); !!}</label> <br><br>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Mint.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '6', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Mixed.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '7', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Respberry.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '8', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Strawberry.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '9', false); !!}</label>
        <label for=""><img src="<?php echo url(""); ?>/themes/itim_world/assets/color/Grape.png" style="width:200px;height:200px;" alt="" />
        {!! Form::checkbox('flavor[]', '10', false); !!}</label>
        <br><input type="submit" value="Random" class="btn btn-success btn-block">
      {{ Form::close() }}
    </div>
    </center>
  </body>
</html>
