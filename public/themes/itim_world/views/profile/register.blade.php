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
          <h1 style="color:#fff;">กรอกข้อมูลส่วนตัว</h1>
          <div class="row">
              <div class="col-xs-10 col-xs-offset-1 bhoechie-tab-container">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                    <div class="list-group" id="left-menu">
                      <a href="#" id="profile" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-user"></h4><br/>ข้อมูลส่วนตัว
                      </a>
                      <a href="#" id="education" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-education"></h4><br/>ข้อมูลการศึกษา
                      </a>
                      <a href="#" id="health" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-heart-empty"></h4><br/>ข้อมูลด้านสุขภาพ
                      </a>
                      <a href="#" id="parent" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-home"></h4><br/>ข้อมูลผู้ปกครอง
                      </a>
                      <a href="#" id="other" class="list-group-item text-center">
                        <h4 class="glyphicon glyphicon-sunglasses"></h4><br/>ข้อมูลด้านอื่นๆ
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-9 bhoechie-tab" id="contents">
                      <!-- ข้อมูลส่วนตัว section -->
                      <div id="profile_content" class="bhoechie-tab-content">
                        <?php echo Form::open(array('url'=>'profile/formfirst','id'=>'reg-1')); ?>
                            <div class="row">
                              <input type="hidden" value="{{$wip_id}}" name="wip_id"/>
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ชื่อ</h3>
                                <input type="text" class="form-control" value="{{ array_get($data,'name_th') }}" style="font-size:1em;" placeholder="ชื่อ" id="name_th" name="name_th" class="required">
                              </div>
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>นามสกุล</h3>
                                <input type="text" class="form-control" value="{{array_get($data,'surname_th')}}" name="surname_th" style="font-size:1em;" id="surname_th" placeholder="นามสกุล" class="required">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ชื่อ (ภาษอังกฤษ)</h3>
                                <input type="text" class="form-control" value="{{array_get($data,'name_en')}}" name='name_en' style="font-size:1em;" id="name_en" placeholder="ชื่อ (ภาษอังกฤษ)" class="required">
                              </div>
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>นามสกุล (ภาษอังกฤษ)</h3>
                                <input type="text" class="form-control" value="{{array_get($data,'surname_en')}}" name='surname_en' style="font-size:1em;" id="surname_en" placeholder="นามสกุล (ภาษอังกฤษ)" class="required">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-4">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ชื่อเล่น</h3>
                                <input type="text" class="form-control" value="{{array_get($data,'nickname')}}" name='nickname' style="font-size:1em;" id="nickname" placeholder="ชื่อเล่น" class="required">
                              </div>
                              <div class="col-xs-4">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ศาสนา</h3>
                                <select class="form-control" id="religion" name="religion" class="required">
                                  <option value="" {!! (array_get($data,'religion')==''?' selected':'') !!}>ระบุ</option>
                                  <option value="bud" {!! (array_get($data,'religion')=='bud'?' selected':'') !!}>พุทธ</option>
                                  <option value="cris" {!! (array_get($data,'religion')=='cris'?' selected':'') !!}>คริสต์</option>
                                  <option value="is" {!! (array_get($data,'religion')=='is'?' selected':'') !!}>อิสลาม</option>
                                  <option value="phm" {!! (array_get($data,'religion')=='phm'?' selected':'') !!}>พราหมณ์-ฮินดู</option>
                                  <option value="other" {!! (array_get($data,'religion')=='other'?' selected':'') !!}>อื่นๆ</option>
                                </select>
                              </div>
                              <div class="col-xs-4">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>วันเกิด</h3>
                                <input type="date" class="form-control" value="{{array_get($data,'dob')}}" id="dob" name='dob' style="font-size:1em;" placeholder="วันเกิด" class="required" >
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>เพศ</h3>
                                <select class="form-control" id="sex" name="sex" class="required">
                                  <option value="">ระบุ</option>
                                  <option value="M" {!! (array_get($data,'sex')=='M'?' selected':'') !!}>ชาย</option>
                                  <option value="F" {!! (array_get($data,'sex')=='F'?' selected':'') !!}>หญิง</option>
                                </select>
                              </div>
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>เบอร์โทรศัพท์</h3>
                                <input type="text" name='tel' value="{{array_get($data,'tel')}}" class="form-control" style="font-size:1em;" id='tel' placeholder="เบอร์โทรศัพท์" class="required">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ที่อยู่</h3>
                                <textarea class="form-control" name="address" style="font-size:1em;" id='address' row tops="3" class="required">{{array_get($data,'address')}}</textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>Facebook</h3>
                                <input type="text" class="form-control" name="facebook" value="{{array_get($data,'facebook')}}" id="facebook" style="font-size:1em;" placeholder="Facebook" class="required">
                              </div>
                              <div class="col-xs-6">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>Twitter</h3>
                                <input type="text" class="form-control" name="twitter" value="{{array_get($data,'twitter')}}" id="twitter" style="font-size:1em;" placeholder="Twitter" class="required">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <button type="submit" class="next" style="float:right; margin:4px">ส่งข้อมูล</button>
                              <a href="{{ url('profile') }}"><button class="next" style="float:right; margin:4px">ย้อนกลับไปหน้าแรก</button></a>
                            </div>
                          <?php echo Form::close(); ?>

                      </div>
                      <!-- ข้อมูลการศึกษา section -->
                      <div id="education_content" class="bhoechie-tab-content">

                        <?php echo Form::open(array('url'=>'profile/formthird','id'=>'reg-2')) ?>
                              <input type="hidden" value="{{$wip_id}}" name="wip_id"/>
                              <div class="row">
                                <div class="col-sm-12">
                                  <h3><span style="color:#ff0000;"> * </span>ชื่อโรงเรียน</h3>
                                  <input type="text" name="school_id" value="{{array_get($wip_school,'school_name')}}" id="typeahead" data-provide="typeahead" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-5">
                                  <h3><span style="color:#ff0000;"> * </span>ระดับชั้น</h3>
                                  <select class="form-control" id="level" name="level" class="required">
                                    <option value="" {!! (array_get($data,'level')==''?' selected':'') !!}>ระบุ</option>
                                    <option value="ม.4" {!! (array_get($data,'level')=='ม.4'?' selected':'') !!}>ม.4</option>
                                    <option value="ม.5" {!! (array_get($data,'level')=='ม.5'?' selected':'') !!}>ม.5</option>
                                    <option value="ม.6" {!! (array_get($data,'level')=='ม.6'?' selected':'') !!}>ม.6</option>
                                  </select>
                                </div>
                                <div class="col-sm-5">
                                  <h3><span style="color:#ff0000;"> * </span>แผนการเรียน</h3>
                                  <select class="form-control" id="program" name="program" class="required">
                                    <option value="" {!! (array_get($data,'program')==''?' selected':'') !!}>ระบุ</option>
                                    <option value="วิทย์-คณิต" {!! (array_get($data,'program')=='วิทย์-คณิต'?' selected':'') !!}>วิทย์-คณิต</option>
                                    <option value="ศิลป็-คำนวน" {!! (array_get($data,'program')=='ศิลป็-คำนวน'?' selected':'') !!}>ศิลป็-คำนวน</option>
                                    <option value="วิทย์-คอม" {!! (array_get($data,'program')=='วิทย์-คอม'?' selected':'') !!}>วิทย์-คอม</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <h3><span style="color:#ff0000;"> * </span>เกรดเฉลี่ย</h3>
                                  <input type="text" name="gpax" id="gpax" value="{{array_get($data,'gpax')}}" class="form-control" style="font-size:1.4em;" class="required">
                                </div>
                              </div>
                              <br>
                              <div class="row">
                                <button type="submit" class="next" style="float:right; margin:4px">ส่งข้อมูล</button>
                                <a href="{{ url('profile') }}"><button class="next" style="float:right; margin:4px">ย้อนกลับไปหน้าแรก</button></a>
                              </div>
                            <?php echo Form::close(); ?>
                      </div>

                      <!-- ข้อมูลด้านสุขภาพ -->
                      <div id="health_content" class="bhoechie-tab-content">
                        <?php echo Form::open(array('url'=>'profile/formfour','id'=>'reg-3')) ?>
                            <input type="hidden" value="{{$wip_id}}" name="wip_id"/>
                            <div class="row">
                              <div class="col-sm-6">
                                <h3><span style="color:#ff0000;"> * </span>โรคประจำตัว</h3>
                                <input type="text" name="disease" id="disease" value="{{array_get($data,'disease')}}" class="form-control" style="font-size:1.4em;" placeholder="โรคประจำตัว" class="required">
                              </div>
                              <div class="col-sm-6">
                                <h3><span style="color:#ff0000;"> * </span>แพ้ยาอะไร/อาหาร</h3>
                                <input type="text" name="allergy" id="allergy" value="{{array_get($data,'allergy')}}" class="form-control" style="font-size:1.4em;" placeholder="แพ้ยาอะไร" class="required">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <button type="submit" class="next" style="float:right; margin:4px">ส่งข้อมูล</button>
                              <a href="{{ url('profile') }}"><button class="next" style="float:right; margin:4px">ย้อนกลับไปหน้าแรก</button></a>
                            </div>
                            <?php echo Form::close(); ?>
                      </div>
                      <!-- ข้อมูลผู้ปกครอง -->
                      <div id="parent_content" class="bhoechie-tab-content">
                        <?php echo Form::open(array('url'=>'profile/formfive','id'=>'reg-4')) ?>
                            <input type="hidden" value="{{$wip_id}}" name="wip_id"/>
                            <div class="row">
                              <div class="col-sm-12">
                                <h3><span style="color:#ff0000;"> * </span>ชื่อ</h3>
                                <input type="text" name="parent_name" id="parent_name" value="{{array_get($data,'parent_name')}}" class="form-control" style="font-size:1.4em;" placeholder="ชื่อผู้ปกครอง" class="required">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-5">
                                <h3><span style="color:#ff0000;"> * </span>ความสัมพันธ์</h3>
                                <input type="text" name="parent_relation" id="parent_relation" value="{{array_get($data,'parent_relation')}}" class="form-control" style="font-size:1.4em;" placeholder="ความสัมพันธ์" class="required">
                              </div>
                              <div class="col-sm-7">
                                <h3><span style="color:#ff0000;"> * </span>เบอร์โทรศัพท์</h3>
                                <input type="text" name="parent_tel" id="parent_tel" value="{{array_get($data,'parent_tel')}}" class="form-control" style="font-size:1.4em;" placeholder="เบอร์โทรศัพท์ผู้ปกครอง" class="required">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <button type="submit" class="next" style="float:right; margin:4px">ส่งข้อมูล</button>
                              <a href="{{ url('profile') }}"><button class="next" style="float:right; margin:4px">ย้อนกลับไปหน้าแรก</button></a>
                            </div>
                            <?php echo Form::close(); ?>
                      </div>
                      <!--ข้อมูลอื่นๆ-->
                      <div id="other_content" class="bhoechie-tab-content">
                          <?php echo Form::open(array('url'=>'profile/formsix','id'=>'reg-5')) ?>
                            <input type="hidden" value="{{$wip_id}}" name="wip_id"/>
                            <div class="row">
                              <div class="col-xs-12">
                                <h3 style="margin: 0;">ทักษะทางคอมพิวเตอร์</h3>
                                <textarea class="form-control" id="computer_skill" name="computer_skill" style="font-size:1em;" row tops="3" class="required">{{array_get($data,'computer_skill')}}</textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>รู้จักค่ายนี้จากไหน</h3>
                                <textarea class="form-control" id="referal" name="referal" style="font-size:1em;" row tops="3" class="required">{{array_get($data,'referal')}}</textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>กิจกรรมที่เคยทำ</h3>
                                <textarea class="form-control" id="activitys" name="activitys" style="font-size:1em;" row tops="3" class="required">{{array_get($data,'activitys')}}</textarea>
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <button type="submit" class="next" style="float:right; margin:4px">ส่งข้อมูล</button>
                              <a href="{{ url('profile') }}"><button  class="next" style="float:right; margin:4px">ย้อนกลับไปหน้าแรก</button></a>
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
