
<!--Content-->

<div class="content">
  <div class="container">
   <div class="rows">
    <br><br>
     <div class="col-xs-12" sytle="backgroud-color:#EEE;">
     <div >
       <center><h1>แก้ไขรูปประจำตัว</h1></center>

        <center>
         {{ Form::open(array('url' => 'avatar', 'files'=> true,'name' => 'upload','id' => 'upload')) }}
         <?php
         if(isset($avatar)){
            echo"<img src=\"".$avatar."\" class=\"img-circle\" alt=\"".$wip_id."\" title=\"".$wip_id."\" width=\"180\" height=\"182\">";
       }else{
        echo"<img src=\"/download/noavatar.jpg\" class=\"img-circle\" alt=\"กรุณาอัพโหลดรูป\" title=\"กรุณาอัพโหลดรูป\" width=\"180\" height=\"182\">";
      }
      ?>
        <br><br>
        <input type="file" id="avatar" name="avatar">
        {{ Form::close()}}
        </center>
      </div>
  </div>
</div>
</div>
<script>
 document.getElementById("avatar").onchange = function() {
  if (document.getElementById("avatar").value != null) {
   document.getElementById("upload").submit();
 }
};
</script>
{{ Form::close() }}
