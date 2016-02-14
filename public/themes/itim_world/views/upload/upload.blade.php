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
         <!-- Header -->
         <div class="header">
            <div class="container">
               <div class="col-xs-2 avatar">
                  <img class="img-circle img-responsive" src="<?php echo url(""); ?>/themes/itim_world/assets/img/pro3.png">
               </div>
               <div class="col-xs-6">
                  <h1>สวัสดีครับ น้องออฟ</h1>
                  <h3>WIP ID 12309</h3>
               </div>
               <div class="col-xs-4 logout">
                  <div class="logout-btn">
                     <button class="logout">ออกจากระบบ</button>
                  </div>
               </div>
            </div>
         </div>
         <!--Content-->
          {{ Form::open(array('url' => 'document', 'files'=> true,'name' => 'upload','id' => 'upload')) }}
         <div class="content">
            <div class="container">
              <div class="col-xs-12">
                  <center><h1>อัพโหลดเอกสาร</h1></center>
               </div>
                  
               <div class="col-xs-12 row main-button">
                     <a href="#">
                     @if(isset($parentdoc) && ($parentdoc=="0" ||$parentdoc=="2" ))
                     <input type="file" name="parentdoc" id="parentdoc" class="overlay buttonupload">
                     @endif
                  </a>
                  <div class="text row">
                     <div class="title col-xs-9">
                        <h1>ใบขออนุญาตผู้ปกครอง</h1>
                     </div>
                     <div class="status col-xs-3">
                     @if(isset($parentdoc) && $parentdoc=="1")      <!--ถ้าเป็น 1 เอกสารผ่านเข้าไฟล์-->
                        <h2><i class="fa fa-check" style="color: green;"></i></h2>
                     @else                                     <!--ถ้าเป็น 0หรืออื่นๆเอกสารผ่านเข้าไฟล์-->
                        <h3 style="margin: 35% auto;">{{$parentdoc_case}}</h3>
                     @endif
                     </div>
                  </div>
                  <div>
                     <img src="/themes/itim_world/assets/bar/Bar-Sup.png" class="img-responsive" alt="">
                  </div>
               </div>
               </a>
               <div class="col-xs-12 row main-button">
                     <a href="#">
                     @if(isset($schooldoc) && ($schooldoc=="0" || $schooldoc == "2"))
                     <input type="file" name="schooldoc" id="schooldoc" class="overlay buttonupload">
                     @endif</a>
                  <div class="text row">
                     <div class="title col-xs-9">
                        <h1>ใบ ปพ.1</h1>
                     </div>
                      <div class="status col-xs-3">
                     @if(isset($schooldoc) && $schooldoc=="1")      <!--ถ้าเป็น 1 เอกสารผ่านเข้าไฟล์-->
                        <h2><i class="fa fa-check" style="color: green;"></i></h2>
                     @elseif (isset($data))                        <!--ถ้าเป็น 0หรืออื่นๆเอกสารผ่านเข้าไฟล์-->
                        <h3 style="margin: 35% auto;">$data</h3>
                     @else
                        <h3 style="margin: 35% auto;">{{$schooldoc_case}}</h3>
                     @endif
                     </div>
                  </div>
                  <div>
                     <img src="/themes/itim_world/assets/bar/Bar-Cat.png" class="img-responsive" alt="">
                  </div>
               </div>
            </div>
         </div>
         <!--End Content-->
      <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">

      </div>
    </div>
    <script>
      document.getElementById("schooldoc").onchange = function() {
         if (document.getElementById("schooldoc").value != null) {
            document.getElementById("upload").submit();
         }  
      };

      document.getElementById("parentdoc").onchange = function() {
         if (document.getElementById("parentdoc").value != null) {
            document.getElementById("upload").submit();
         }
      };
    </script>
      {{ Form::close() }}
