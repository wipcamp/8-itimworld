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
         <center><h1>อัพโหลดเอกสาร</h1></center>
      </div>
      <div class="col-xs-12 row main-button">
         <a href="#">
            @if(isset($schooldoc) && ($schooldoc=="0" || $schooldoc == "2" || $schooldoc == "3"))
            <input type="file" name="schooldoc" id="schooldoc" class="overlay buttonupload" alt="กดเพื่ออัพโหลด">
            @endif</a>
            <div class="text row">
               <div class="title col-xs-9">
                  <h1>ใบ ปพ.1</h1>
               </div>
               <div class="status col-xs-3">
                  @if(isset($schooldoc))      
                     @if($parentdoc=="0")
                     <h2><i class="fa fa-hand-pointer-o" style=""></i></h2><h3 style="margin: 35% auto;">{{$schooldoc_case}}</h3>
                     @elseif($schooldoc=="1")
                     <h2><i class="fa fa-check-circle-o" style="color: green;"></i></h2><h3 style="margin: 35% auto;color:green;">เอกสารถูกต้อง</h3>
                     @elseif($schooldoc=="2")
                     <br><br><h3><i class="fa fa-spinner" style="color: #FFFF66;"></i></h3><h3 style="margin: 35% auto;color:#FFFF66;">{{$schooldoc_case}}</h3>
                     @elseif($schooldoc=="3")
                     <br><h3><i class="fa fa-exclamation-triangle" style="color:red;"></i></h3><h3 style="margin: 35% auto;color:red;">{{$schooldoc_case}} <br>กดเพื่ออัพโหลดเอกสาร</h3>
                     @endif
                  @endif
               </div>
            </div>
            <div>
               <img src="/themes/itim_world/assets/bar/Bar-Cat.png" class="img-responsive"  alt="กดเพื่ออัพโหลด">
            </div>
         </div>
         <div class="col-xs-12 row main-button">
            <a href="#">
               @if(isset($parentdoc) && ($parentdoc=="0" || $parentdoc=="2" || $parentdoc=="3" ))
               <input type="file" name="parentdoc" id="parentdoc" class="overlay buttonupload">
               @endif
            </a>
            <div class="text row">
               <div class="title col-xs-9">
                  <h1>ใบขออนุญาตผู้ปกครอง</h1>
               </div>
               <div class="status col-xs-3">
                  @if(isset($parentdoc))      
                     @if($parentdoc=="0")
                     <h2><i class="fa fa-hand-pointer-o" style=""></i></h2><h3 style="margin: 35% auto;">{{$parentdoc_case}}</h3>
                     @elseif($parentdoc=="1")
                     <h2><i class="fa fa-check-circle-o" style="color: green;"></i></h2><h3 style="margin: 35% auto;color:green;">เอกสารถูกต้อง</h3>
                     @elseif($parentdoc=="2")
                     <br><br><h3><i class="fa fa-spinner" style="color: #FFFF66;"></i></h3><h3 style="margin: 35% auto;color:#FFFF66;">{{$parentdoc_case}}</h3>
                     @elseif($parentdoc=="3")
                     <br><h3><i class="fa fa-exclamation-triangle" style="color:red;"></i></h3><h3 style="margin: 35% auto;color:red;">{{$parentdoc_case}} <br>กดเพื่ออัพโหลดเอกสาร</h3>
                     @endif
                  @endif
               </div>
            </div>
            <div>
               <img src="/themes/itim_world/assets/bar/Bar-Sup.png" class="img-responsive"  alt="กดเพื่ออัพโหลด">
            </div>
         </div>


         <div class="col-xs-12 row main-button">

            <div class="text row" >
              <div class="status col-xs-12"  style="background-color: #230D10">
               <a href="download/parent.pdf"><h3 style="color: #fff;margin: 35% auto;">
                  <i class="fa fa-edit"></i>ดาวโหลดใบขออนุญาตผู้ปกครอง</h3></a>
               </div>
            </div >
         </div>
      </div>
      <br>
      <center><a href="{{ url('profile') }}" class="btn btn-primary" style="font-size: 30px; ">กลับสู่หน้าหลัก</a></center>
   </div>
</div>
<!--End Content-->
<div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">

</div>
</div>
<script>
@if(isset($schooldoc) && ($schooldoc=="0" || $schooldoc == "2" || $schooldoc == "3"))
            
            
   document.getElementById("schooldoc").onchange = function() {
      if (document.getElementById("schooldoc").value != null) {
         document.getElementById("upload").submit();
      }
   };
@endif

@if(isset($parentdoc) && ($parentdoc=="0" || $parentdoc=="2" || $parentdoc=="3" ))     
               
   document.getElementById("parentdoc").onchange = function() {
      if (document.getElementById("parentdoc").value != null) {
         document.getElementById("upload").submit();
      }
   };
 @endif
</script>
{{ Form::close() }}
