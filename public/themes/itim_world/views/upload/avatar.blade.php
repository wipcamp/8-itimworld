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
          {{ Form::open(array('url' => 'avatar', 'files'=> true,'name' => 'upload','id' => 'upload')) }}
            Form::file('image');
          {{ Form::clode()}}