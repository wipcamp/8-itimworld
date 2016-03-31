{!!HTML::style('themes/itim_world/assets/css/bootstrap-responsive.css')!!}
<link rel="stylesheet" href="<?php echo url(""); ?>/themes/itim_world/assets/css/vt/bootstrap.vertical-tabs.css" media="screen" title="no title" charset="utf-8">
<style>
html{
  overflow-x : hidden;
}
.nav-tabs {
      background-color: #fff;
      padding: 0px 0px 0 0px;
    }

/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
</style>

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

      <div class="content">
        <div class="container" style="margin-top:30; color:#666;">
          <center><h1 style="color:#fff;">กรอกข้อมูลส่วนตัว</h1></center>
          <div class="row">
              <div class="col-xs-10 col-xs-offset-1 bhoechie-tab-container">
                  <div class="col-xs-9 bhoechie-tab" id="contents">
                      <!-- ข้อมูลส่วนตัว section -->
                      <div id="profile_content" class="bhoechie-tab-content">
                        <?php echo Form::open(array('url'=>'profile/formfirst','id'=>'reg-1')); ?>
                            <div class="row">
                              <div class="col-xs-12 row main-button">
                                 <a href="#">
                                    @if //ถ้าอัพโหลดแล้วให้ overlay
                                    <input type="file" name="slip" id="parentdoc" class="overlay buttonupload">
                                    @endif
                                 </a>
                                 <div class="text row">
                                    <div class="title col-xs-9">
                                       <h1>หลักฐานการยืนยันตน</h1>
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
                            </div>

                            <div class="row">
                              <div class="col-xs-4">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ไซต์เสื้อ</h3>
                                <div class="radio">
                                  <label><input type="radio" name="s">S</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="m">M</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="l">L</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="xl">XL</label>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-xs-4">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>จุดนัดพบ WIP Camp #8</h3>
                                <div class="radio">
                                  <label><input type="radio" name="bymyself">เดินทางมาเองที่มหาวิทยาลัย</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="victory">อนุเสาวรีย์ชัยสมรภูมิ</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="mochit">หมอชิต</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="southline">ขนส่งสายใต้ (ใหม่)</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="railway">หัวลำโพง</label>
                                </div>
                              </div>
                            </div>

                            <br>
                            <div class="row">
                              <button type="submit" class="next" style="float:right; margin:4px">ส่งข้อมูล</button>
                              <a href="{{ url('profile') }}" >ย้อนกลับไปหน้าแรก</a>
                            </div>
                          <?php echo Form::close(); ?>

                      </div>
                    </div>
              </div>
          </div>
          </div>




      </div>
      <!--End Content-->
      <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
      </div>
    </div>
