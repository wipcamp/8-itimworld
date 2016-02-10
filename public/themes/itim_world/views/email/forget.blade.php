<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        echo Form::open(array('url'=>'account/reset'));
     ?>
     {{$wip_id}} // {{$verify}}
      <input type="hidden" value='{{$wip_id}}' name="wip_id"/>
      <input type="hidden" value='{{$verify}}' name="verify"/>
      <input type="text" name="new_password" placeholder="new password">
      <input type="submit" name="submit" value="Submit">
     <?php
         echo Form::close();
     ?>
  </body>
</html>
