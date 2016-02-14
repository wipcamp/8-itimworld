<div class="header">
   <div class="container">
      <div class="col-xs-2 avatar">
         <img class="img-circle img-responsive" src="<?php echo url(""); ?>/themes/itim_world/assets/img/pro3.png">
      </div>
      <div class="col-xs-6">
         <h1>สวัสดีครับ น้อง{{ !empty($profile['nickname']) ? $profile['nickname'] : $profile['name_th'].' '.$profile['surname_th'] }}</h1>
         <h3>WIP ID {{ array_get($profile, 'wip_id', 'XXXXXX')}}</h3>
      </div>
      <div class="col-xs-4 logout">
         <div class="logout-btn">
            <a href="{{ url('auth/logout') }}" class="btn logout">ออกจากระบบ</a>
         </div>
      </div>
   </div>
</div>
