	<!DOCTYPE html>
	<html>
	  <head>
	    <meta charset="utf-8">
	    <title></title>
	  </head>
	  <body>
       <?php
          echo Form::open(array('url'=>'account/forget'));
       ?>
          <input type="email" name="email" placeholder="Email">
          <input type="submit" name="submit" value="Submit">
       <?php
          echo Form::close();
       ?>
	  </body>
	</html>
