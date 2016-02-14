<div class="container-fluid">
 <!-- Scene -->
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
<!--Content-->
{{ Form::open(array('url' => 'document', 'files'=> true,'name' => 'upload','id' => 'upload')) }}
<div class="content">
  <div class="container">
   <div class="col-xs-12">
     <center><h1>แก้ไขรูปประจำตัว</h1></center>
   </div>
   <div class="col-xs-12 row main-button">
     <center>
      <div class="text row">
       
        <?php

        if(isset($avatar)){


           $extp = explode(":",$avatar);
           
           if (isset($extp[1]) && strcmp($extp[1],"graph")) {
            echo"'<img src=\"".$avatar."\" class=\"file-preview-image\" alt=\"".$wip_id."\" title=\"".$wip_id."\" >'";
            }else{
             echo"'<img src=\"upload/".$wip_id."/".$avatar."\" class=\"file-preview-image\" alt=\"".$wip_id."\" title=\"".$wip_id."\" width='60'>'";
        }
        }else{
            echo"'<img src=\"/upload/noavatar.jpg\" class=\"file-preview-image\" alt=\"กรุณาอัพโหลดรูป\" title=\"กรุณาอัพโหลดรูป\" width='60' height='60'>'";
        }
        ?>
          {{ Form::open(array('url' => 'avatar', 'files'=> true,'name' => 'upload','id' => 'upload')) }}
            {{ Form::file('avatar',array('id'=>'avatar','data-show-upload'=>'false')) }}
            {{ Form::Submit('บันทึก',array('class'=>'btn btn-success'))}}
          {{ Form::close()}}
          

      </div>
      </center>
 </div>

</div>
<!--End Content-->
<div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">

</div>
</div>

{{ Form::close() }}
