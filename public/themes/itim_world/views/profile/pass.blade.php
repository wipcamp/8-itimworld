<div class="content">
   <div class="container">
     <br>
     <br>
      {{ Form::open(array('url' => 'profile','method'=>'POST','files'=> true,)) }}

      <div class="col-xs-12 row main-button">
         <select name="size">
           <option value="S" <?php if ($size == "S") {echo "selected";} ?>>S</option>
           <option value="M" <?php if ($size == "M") {echo "selected";} ?>>M</option>
           <option value="L" <?php if ($size == "L") {echo "selected";} ?>>L</option>
           <option value="XL" <?php if ($size == "XL") {echo "selected";} ?>>XL</option>
           <option value="2XL" <?php if ($size == "2XL") {echo "selected";} ?>>2XL</option>
         </select>
         <br>
         <select name="transpot">
           <option value="0" <?php if ($transpot == "0") {echo "selected";} ?>>เดินทางมาเอง</option>
           <option value="1" <?php if ($transpot == "1") {echo "selected";} ?>>อนุเสาวรีย์</option>
           <option value="2" <?php if ($transpot == "2") {echo "selected";} ?>>หมอชิต</option>
           <option value="3" <?php if ($transpot == "3") {echo "selected";} ?>>ขนส่งสายใต้(ใหม่)</option>
           <option value="4" <?php if ($transpot == "4") {echo "selected";} ?>>หัวลำโพง</option>
         </select>
         <br>
         <input type="file" name="slip" id="slip">
         <br>
         <br>
         {{$slip_status}}
         <br>
         <br>
         {{$slip_file}}
         <br>
         <br>
         {{$slip_note}}
         <br>
         <br>

         <button type="submit">ส่งขอ้มูล</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
