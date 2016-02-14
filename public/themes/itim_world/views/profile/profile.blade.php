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
         <div class="content">
            <div class="container">
              <br>
              <br>
              <a href="{{ url('profile/register') }}" style="color:#fff;">
                   <div class="col-xs-12 row main-button">
                      <div class="overlay"></div>
                      <div class="text row">
                         <div class="title col-xs-10">
                            <h1>กรอกข้อมูลส่วนตัว</h1>
                         </div>
                         <div class="status col-xs-2">
                            <h2 class="centered">2/3</h2>
                         </div>
                      </div>
                      <div class="bg-btn">
                         <img src="<?php echo url(""); ?>/themes/itim_world/assets/bar/Bar-Cap.png" class="img-responsive" alt="">
                      </div>
                   </div>
               </a>

               <a href="{{ url('question') }}">
                 <div class="col-xs-12 row main-button">
                    <div class="overlay"></div>
                    <div class="text row">
                       <div class="title col-xs-10">
                          <h1>ตอบคำถามค่าย</h1>
                       </div>
                       <div class="status col-xs-2">
                          <h2><i class="fa fa-lock"></i></h2>
                       </div>
                    </div>
                    <div class="bg-btn">
                       <img src="<?php echo url(""); ?>/themes/itim_world/assets/bar/Bar-Scarlet.png" class="img-responsive" alt="">
                    </div>
                 </div>
               </a>

               <a href="{{ url('document') }}">
                 <div class="col-xs-12 row main-button">
                    <div class="overlay"></div>
                    <div class="text row">
                       <div class="title col-xs-10">
                          <h1>อัพโหลดเอกสาร</h1>
                       </div>
                       <div class="status col-xs-2">
                          <h2><i class="fa fa-lock"></i></h2>
                       </div>
                    </div>
                    <div class="bg-btn">
                       <img src="<?php echo url(""); ?>/themes/itim_world/assets/bar/Bar-Hulk.png" class="img-responsive" alt="">
                    </div>
                 </div>
               </a>
            </div>
         </div>
         <!--End Content-->
      <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">

      </div>
    </div>
