<?php
    echo Form::open(array('url'=>'account/edit'));
 ?>

  <div class="form-group">
      <label for="wip_id">wip_id</label>
      <input type="text" class="form-control" name="wip_id" id="wip_id" placeholder="wip_id">
  </div>
  <div class="form-group">
      <label for="email">email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="email">
  </div>
<input type="submit" name="submit" value="submit" class="btn btn-default">
<?php
    echo Form::close();
?>
