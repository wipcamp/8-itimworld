{!!HTML::style('themes/itim_world/assets/css/bootstrap-responsive.css')!!}
{!!HTML::script('themes/itim_world/assets/js/bootstrap.js')!!}
<script type="text/javascript">
  $(document).ready(function(){
    $('#typeahead').typeahead({
      source: function(query,process){
        const data = {school_name:query}
        $.ajax({
          url: 'http://itim.wip.loc/profile/typeahead',
          type: 'GET',
          data: data,
          dataType: 'JSON',
          async: true,
          success: function(data){
            process(data);
          }
        });
      }
    });
  });
</script>
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
              <button type="button" class="logout">ออกจากระบบ</button>
            </div>
          </div>
        </div>
      </div>
      <!--Content-->
      <div class="content">
        <div class="row">
          <div class="container">
            <div class="pagination-container full-width-container">
              <div class="container">
                <div class="pagination"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <ul class="slide-container container">
            <li data-tag="ข้อตกลงและเงื่อนไข" class="slide">
              <div class="container">
                <form class="reg-form" id="reg-0" action="#">
                  <h1>ข้อตกลงและเงื่อนไข</h1>
                  <div class="row">

                  </div>
                  <div class="row">
                    <div class="button-container container">
                      <button type="submit" class="next">next</button>
                      <button class="previous">previous</button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li data-tag="ข้อมูลส่วนตัว" class="slide">
              <div class="container">
                <!-- form start -->
                <?php echo Form::open(array('','id'=>'reg-1','class'=>'reg-form')); ?>
                <h1>ข้อมูลส่วนตัว</h1>
                <div class="row">
                  <input type="hidden" value="22222" name="wip_id"/>
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ชื่อ</h3>
                    <input type="text" class="form-control" value="{{ array_get($data,'name_th') }}" style="font-size:1em;" placeholder="ชื่อ" id="namefield" name="name_th" class="required">
                  </div>
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>นามสกุล</h3>
                    <input type="text" class="form-control" value="{{array_get($data,'surname_th')}}" name="surname_th" style="font-size:1em;" placeholder="นามสกุล" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ชื่อ (ภาษอังกฤษ)</h3>
                    <input type="text" class="form-control" value="{{array_get($data,'name_en')}}" name='name_en' style="font-size:1em;" placeholder="ชื่อ (ภาษอังกฤษ)" class="required">
                  </div>
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>นามสกุล (ภาษอังกฤษ)</h3>
                    <input type="text" class="form-control" value="{{array_get($data,'surname_en')}}" name='surname_en' style="font-size:1em;" placeholder="นามสกุล (ภาษอังกฤษ)" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-4">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ชื่อเล่น</h3>
                    <input type="text" class="form-control" value="{{array_get($data,'nickname')}}" name='nickname' style="font-size:1em;" placeholder="ชื่อเล่น" class="required">
                  </div>
                  <div class="col-xs-4">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ศาสนา</h3>
                    <input type="text" class="form-control" value="{{array_get($data,'religion')}}" name='religion' style="font-size:1em;" placeholder="ศาสนา" class="required">
                  </div>
                  <div class="col-xs-4">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>วันเกิด</h3>
                    <input type="date" class="form-control" value="{{array_get($data,'dob')}}" name='dob' style="font-size:1em;" placeholder="วันเกิด" class="required" >
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>เพศ</h3>
                    <select class="selectbox" name="sex" class="required">
                      <option>ระบุ</option>
                      <option value="M" {!! (array_get($data,'sex')=='M'?' selected':'') !!}>ชาย</option>
                      <option value="F" {!! (array_get($data,'sex')=='F'?' selected':'') !!}>หญิง</option>
                    </select>
                  </div>
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>เบอร์โทรศัพท์</h3>
                    <input type="text" name='tel' value="{{array_get($data,'tel')}}" class="form-control" style="font-size:1em;" placeholder="เบอร์โทรศัพท์" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="button-container container">
                    <button type="submit" class="next">next</button>
                    <button class="previous">previous</button>
                  </div>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
            <li data-tag="ข้อมูลส่วนตัว (ต่อ)" class="slide">
              <div class="container">
                <!-- form start -->
                <?php echo Form::open(array('','id'=>'reg-2','class'=>'reg-form')); ?>
                <h1>ข้อมูลส่วนตัว (ต่อ)</h1>
                <input type="hidden" value="22222" name="wip_id"/>
                <div class="row">
                  <div class="col-xs-12">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>ที่อยู่</h3>
                    <textarea class="form-control" name="address" style="font-size:1em;" row tops="3" class="required">{{array_get($data,'address')}}</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>Facebook</h3>
                    <input type="text" class="form-control" name="facebook" value="{{array_get($data,'facebook')}}" style="font-size:1em;" placeholder="Facebook" class="required">
                  </div>
                  <div class="col-xs-6">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>Twitter</h3>
                    <input type="text" class="form-control" name="twitter" value="{{array_get($data,'twitter')}}" style="font-size:1em;" placeholder="Twitter" class="required">
                  </div>
                  <div class="col-xs-6">
                      <img src="
                      " alt="your image" class="target" style="width: 200px; height: 200px; border-radius: 50%; display: block; margin: 10px auto;" />
                      <label for="file" style="display: block; width: 120px; padding: 20px; cursor: pointer;margin: 20px auto;text-align: center;">เลือกรูปภาพประจำตัว</label>
                      <input type="file" id="file" />

                  </div>
                </div>

                <div class="row">
                  <div class="button-container container">
                    <button type="submit" class="next">next</button>
                    <button class="previous">previous</button>
                  </div>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
            <li data-tag="ข้อมูลการศึกษา" class="slide">
              <div class="container">
                <!-- form start -->
                <?php echo Form::open(array('','id'=>'reg-3','class'=>'reg-form')); ?>
                <h1>ข้อมูลการศึกษา</h1>
                <input type="hidden" value="22222" name="wip_id"/>
                <div class="row">
                  <div class="col-sm-12">
                    <h3><span style="color:#ff0000;"> * </span>ชื่อโรงเรียน</h3>
                    <input type="text" name="school_name" value="{{array_get($data,'school_id')}}" id="typeahead" data-provide="typeahead" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-5">
                    <h3><span style="color:#ff0000;"> * </span>ระดับชั้น</h3>
                    <input type="text" name="level" value="{{array_get($data,'level')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                  <div class="col-sm-5">
                    <h3><span style="color:#ff0000;"> * </span>แผนการเรียน</h3>
                    <input type="text" name="program" value="{{array_get($data,'program')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                  <div class="col-sm-2">
                    <h3><span style="color:#ff0000;"> * </span>เกรดเฉลี่ย</h3>
                    <input type="text" name="gpax" value="{{array_get($data,'gpax')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="button-container container">
                  <button type="submit" class="next">next</button>
                  <button class="previous">previous</button>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
            <li data-tag="ข้อมูลด้านสุขภาพ" class="slide">
              <div class="container">
                <!-- form start -->
                <?php echo Form::open(array('','id'=>'reg-4','class'=>'reg-form')); ?>
                <h1>ข้อมูลด้านสุขภาพ</h1>
                <input type="hidden" value="22222" name="wip_id"/>
                <div class="row">
                  <div class="col-sm-6">
                    <h3><span style="color:#ff0000;"> * </span>โรคประจำตัว</h3>
                    <input type="text" name="disease" value="{{array_get($data,'disease')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                  <div class="col-sm-6">
                    <h3><span style="color:#ff0000;"> * </span>แพ้ยาอะไร/อาหาร</h3>
                    <input type="text" name="allergy" value="{{array_get($data,'allergy')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="button-container container">
                  <button type="submit" class="next">next</button>
                  <button class="previous">previous</button>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
            <li data-tag="ข้อมูลผู้ปกครอง" class="slide">
              <div class="container">
                <!-- form start -->
                <?php echo Form::open(array('','id'=>'reg-5','class'=>'reg-form')); ?>
                <h1>ข้อมูลผู้ปกครอง</h1>
                <input type="hidden" value="22222" name="wip_id"/>
                <div class="row">
                  <div class="col-sm-12">
                    <h3><span style="color:#ff0000;"> * </span>ชื่อ</h3>
                    <input type="text" name="parent_name" value="{{array_get($data,'parent_name')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-5">
                    <h3><span style="color:#ff0000;"> * </span>ความสัมพันธ์</h3>
                    <input type="text" name="parent_relation" value="{{array_get($data,'parent_relation')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                  <div class="col-sm-7">
                    <h3><span style="color:#ff0000;"> * </span>เบอร์โทรศัพท์</h3>
                    <input type="text" name="parent_tel" value="{{array_get($data,'parent_tel')}}" class="form-control" style="font-size:1.4em;" placeholder="Text input" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="button-container container">
                    <button type="submit" class="next">next</button>
                    <button class="previous">previous</button>
                  </div>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
            <li data-tag="ทักษะทางคอมพิวเตอร์" class="slide">
              <div class="container">
                <!-- form start -->
                <?php echo Form::open(array('','id'=>'reg-6','class'=>'reg-form')); ?>
                <h1>ข้อมูลด้านอื่นๆ</h1>
                <input type="hidden" value="22222" name="wip_id"/>
                <div class="row">
                  <div class="col-xs-12">
                    <h3 style="margin: 0;">ทักษะทางคอมพิวเตอร์</h3>
                    <input type="text" name="computer_skill" value="{{array_get($data,'computer_skill')}}" class="form-control" style="font-size:1em;" placeholder="ทักษะทางคอมพิวเตอร์" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>รู้จักค่ายนี้จากไหน</h3>
                    <input type="text" name="referal" value="{{array_get($data,'referal')}}" class="form-control" style="font-size:1em;" placeholder="รู้จักค่ายนี้จากไหน" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <h3 style="margin: 0;"><span style="color:#ff0000;"> * </span>กิจกรรมที่เคยทำ</h3>
                    <input type="text" name="activitys" value="{{array_get($data,'activitys')}}" class="form-control" style="font-size:1em;" placeholder="กิจกรรมที่เคยทำ" class="required">
                  </div>
                </div>
                <div class="row">
                  <div class="button-container container">
                    <button type="submit" class="next">next</button>
                    <button class="previous">previous</button>
                  </div>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
            <li data-tag="Confirm" class="slide">
              <!-- form start -->
                <?php echo Form::open(array('url' => '#','id'=>'confirm','class'=>'reg-form')); ?>
              <div class="container">
                <h1>Confirm your application.</h1>
                <h2>Information about this section.</h2>
                <div class="row">
                  <div class="button-container container">
                    <button type="submit" class="next">next</button>
                    <button class="previous">previous</button>
                  </div>
                </div>
              </div>
              <?php echo Form::close(); ?>
            </li>
          </ul>
        </div>
      </div>
      <!--End Content-->
      <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
      </div>
    </div>
    <!-- Javascript -->
