
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
            {{ Form::Submit('บันทึก')}}
          {{ Form::close()}}

          {{$wip_id}}
          @if(isset($avatar))

          {{$avatar}}
          @endif
