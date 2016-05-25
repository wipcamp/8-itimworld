<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <title>WIP Camp #8 : Random< Nong itim</title>
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
    @if ($s['avatar']=== null||$s['avatar'] === "")
        <img style="width:250px;height:250px;" src="<?php echo url(""); ?>/themes/itim_world/assets/img/wippo/wippo-profile.jpg" alt="" />
    @else
        <img src="<?php echo url(""); ?>/themes/itim_world/assets/fb/{{$s['wip_id']}}.jpg" style="width:250px;height:250px;" alt="" />
    @endif
      {{ Form::open(array('url' => 'random/flavor')) }}
    @for ($i = 0; $i < count($a); $i++)
      @for ($q = 1; $q <= 10; $q++)
        @if ($a[$i]==$q)
        {!! Form::hidden('reg',0) !!}
          {!! Form::checkbox('flavor[]',$q, true,['style'=>'position:absolute; opacity:0' ]); !!}
        @else
        @endif
      @endfor
    @endfor
    <p style="color:#fff; font-size:30px;">
       {{$s['name_th']}} {{$s['surname_th']}} ({{$s['nickname']}}) รส{{$s['flavor_th']}}
    </p>
    <input type="submit" name="submit" value="Random again">
    <a href="<?php echo url(""); ?>/random"><button type="button" name="Back to select flavor">Select flavor</button></a>
    {{ Form::close() }}
  </center>

  </body>
</html>
