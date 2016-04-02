 <style>
  .size{
    color:#000;
  }
 </style>

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

<div class="content">
   <div class="container">
     <br>
     <br>
     <center><h1>ยืนยันสิทธิ์</h1>
     
     <h2 style="margin-top: -5%;">โอนเงินเข้าบัญชี <u>ธนาคารไทยพาณิชย์ จำกัด (มหาชน)</u> สาขามหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี เลขที่บัญชี <u>237-219910-5</u> <u>ชื่อบัญชี นางสาวฉันทิกา นิรัติศัยโสภิญ และ/หรือ นายทรงฤทธิ์ เกิดผล</u>   เป็นจำนวน <u>450</u> บาท ภายในวันที่ 5 เมษายน</h2>
     </center>
      {{ Form::open(array('url' => 'profile','method'=>'POST','files'=> true,)) }}
      <div class="col-xs-8-offset-2 row main-button size">
        <div class="row">
          <div class="col-xs-6 form-group">
            <h2 style="color:#fff;">ระบุไซต์เสื้อ</h2>
              <select name="size" class="form-control" style="font-size: 1.3em;">
                 <option value="S" <?php if ($size == "S") {echo "selected";} ?>>S</option>
                 <option value="M" <?php if ($size == "M") {echo "selected";} ?>>M</option>
                 <option value="L" <?php if ($size == "L") {echo "selected";} ?>>L</option>
                 <option value="XL" <?php if ($size == "XL") {echo "selected";} ?>>XL</option>
                 <option value="2XL" <?php if ($size == "2XL") {echo "selected";} ?>>2XL</option>
               </select>
          </div>
          <div class="col-xs-6 form-group">
          <h2 style="color:#fff;">จุดนัดพบ WIP Camp #8</h2>
            <select name="transpot" class="form-control" style="font-size: 1.3em;">
               <option value="0" <?php if ($transpot == "0") {echo "selected";} ?>>เดินทางมาเอง</option>
               <option value="1" <?php if ($transpot == "1") {echo "selected";} ?>>อนุเสาวรีย์</option>
               <option value="2" <?php if ($transpot == "2") {echo "selected";} ?>>หมอชิต</option>
               <option value="3" <?php if ($transpot == "3") {echo "selected";} ?>>ขนส่งสายใต้(ใหม่)</option>
               <option value="4" <?php if ($transpot == "4") {echo "selected";} ?>>หัวลำโพง</option>
             </select>
          </div>
        </div>
         <br>
         
         <a href="#">
            @if(!isset($slip_status))
            <input type="file" id="upload" name="slip" id="slip" class="overlay buttonupload" alt="กดเพื่ออัพโหลด" style="height: 40%;">
            @elseif(isset($slip_status) && $slip_status==0)
            <input type="file" id="upload" name="slip" id="slip" class="overlay buttonupload" alt="กดเพื่ออัพโหลด" style="height: 40%;">
            @elseif(isset($slip_status) && $slip_status==1)
	
            @endif
         </a>
            <div class="text row" style="height: 40%;">
               <div class="title col-xs-9">
                  <h1 style="color:#fff;">อัพโหลดสลิป</h1>
               </div>
               <div class="status col-xs-3">
                  @if(!isset($slip_status))
                  <h2><i class="fa fa-hand-pointer-o" style="color:white;"></i></h2><h3 style="margin: 35% ;">กดเพื่ออัพโหลดเอกสาร</h3>
                  @endif
                  @if(isset($slip_status))      
                     @if($slip_status==0)
                     <h2><i class="fa fa-hand-pointer-o" style="color:white;"></i></h2><h3 style="margin: 35% ;">กดเพื่ออัพโหลดเอกสาร</h3>
                     @elseif($slip_status==1)
                     <h2><i class="fa fa-check-circle-o" style="color: green;"></i></h2><h3 style="margin: 35% ;color:green;">{{$slip_note}}</h3>
                     @elseif($slip_status==2)
                     <br><br><h3><i class="fa fa-spinner" style="color: #FFFF66;"></i></h3><h3 style="margin: 35% ;color:#FFFF66;">{{$slip_note}}</h3>
                     @elseif($slip_status=="3")
                     <br>
                     <h3>
                      <i class="fa fa-exclamation-triangle" style="color:red;"></i>
                     </h3>
                     <h3 style="margin: 35% auto;color:red;">{{$slip_note}} <br>กดเพื่ออัพโหลดเอกสาร</h3>
                     @endif
                  @endif
               </div>
            </div>
            <div>
               <img src="themes/itim_world/assets/bar/Bar-Sup.png" class="img-responsive"  alt="กดเพื่ออัพโหลด">
            </div>
      </div>
      <center><button type="submit" style="z-index:5;">ส่งข้อมูล</button></center>
      {{ Form::close() }}
    </div>
  </div>
</div>
