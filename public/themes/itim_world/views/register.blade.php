<?php
    echo Form::open(array('url'=>'account/register'));
 ?>

  <div class="form-group">
      <label for="wip_id">wip_id</label>
      <input type="text" class="form-control" name="wip_id" id="wip_id" placeholder="wip_id">
  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="email">
  </div>
  <div class="form-group">
      <label for="password">password</label>
      <input type="text" class="form-control" name="password" id="password" placeholder="password">
  </div>
  <div class="form-group">
      <label for="facebook_id">facebook_id</label>
      <input type="text" class="form-control" name="facebook_id" id="facebook_id" placeholder="facebook_id">
  </div>
<input type="submit" name="submit" value="submit" class="btn btn-default">
<?php
    echo Form::close();
?>
