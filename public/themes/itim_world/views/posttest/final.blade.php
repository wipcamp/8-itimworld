<div class="bg-posttest-final">
  <div class="bg-overlay"></div>
  <div class="container final">
    <div class="content post-test">
      <center>
        <h1>ยินดีด้วยน้องผ่านค่ายเรียบร้อยแล้ว</h1></center>

      <div class="row main">
        <div class="col-sm-8 profile">
          <div class="col-sm-4">
            @if($profile['avatar']=== null||$profile['avatar'] === "")
               <img class="img-circle img-responsive" src="<?php echo url(""); ?>/themes/itim_world/assets/img/wippo/wippo-profile.jpg">
            @else
               <img class="img-circle img-responsive" src="<?php echo url(""); ?>/themes/itim_world/assets/fb/{{ $wip_id }}.jpg">
            @endif
          </div>
          <div class="col-sm-6">
            <h3 class="wipID">WIP ID {{ $wip_id }}</h3>
            <h2 class="wipNAME">{{$profile['name_th']}} {{$profile['surname_th']}}</h2>
            <h2 class="wipNICK">{{$profile['nickname']}}</h2>
            <h2 class="wipFLAV">{{$profile['flavor_th']}}</h2>
          </div>

        </div>
        <div class="col-sm-4">
          <div class="row score pre-test">
            <div class="col-sm-12">
              <h2>คะแนนก่อนเรียน</h2>
              <h3>{{ $pretest }} คะแนน</h3>
            </div>
          </div>
          <div class="row score post-test">
            <div class="col-sm-12">
              <h2>คะแนนหลังเรียน</h2>
              <h3>{{ $posttest }} คะแนน</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <a style="text-decoration:none;" href="https://goo.gl/V1w3Br"><button style="height: 70px; font-size:25px;" class="btn btn-success btn-block">กรอกแบบสำรวจค่าย</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
