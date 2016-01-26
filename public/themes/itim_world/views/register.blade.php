<?php
    echo Form::open(array('url'=>'itim/regis'));
 ?>

  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="number" placeholder="Name">
  </div>
  <div class="form-group">
      <label for="number">Number</label>
      <input type="number" class="form-control" name="number" id="number" placeholder="Number">
  </div>
  <div class="radio">
      <label for="sex">
      <input type="radio" name="sex" value="M" checked>
      : Male
      </label>
  </div>
  <div class="radio">
      <label for="sex">
      <input type="radio" name="sex" value="F">
      : Female
      </label>
  </div>
<input type="submit" name="submit" value="submit" class="btn btn-default">
<?php
    echo Form::close();
?>
