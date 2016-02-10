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
            <img class="img-circle img-responsive" src="http://itim.wip.loc/themes/itim_world/assets/img/pro3.png">
          </div>
          <div class="col-xs-6">
            <h1>สวัสดีครับ น้องออฟ</h1>
            <h3 style="margin: 0;">WIP ID 12309</h3>
          </div>
          <div class="col-xs-4 logout">
            <div class="logout-btn">
              <button type="button" class="logout">ออกจากระบบ</button>
            </div>
          </div>
        </div>
      </div>
      <!--Content-->
      <div class="row">
        <div class="container">
          <div class="col-xs-10 col-xs-offset-1">
            <div class="row">
              <div id="rootwizard">
                <div class="navbar">
                  <div class="navbar-inner">
                    <div class="container">
                      <ul>
                        <li><a href="#tab0" data-toggle="tab">Term & Condition</a></li>
                        <li><a href="#tab1" data-toggle="tab">1) ข้อมูลส่วนตัว</a></li>
                        <li><a href="#tab2" data-toggle="tab">2) ข้อมูลส่วนตัว (ต่อ)</a></li>
                        <li><a href="#tab3" data-toggle="tab">3) ข้อมูลด้านการศึกษา</a></li>
                        <li><a href="#tab4" data-toggle="tab">4) ข้อมูลด้านสุขภาพ</a></li>
                        <li><a href="#tab5" data-toggle="tab">5) ข้อมูลผู้ปกครอง</a></li>
                        <li><a href="#tab6" data-toggle="tab">6) ข้อมูลด้านอื่นๆ</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              <form id="regisForm" method="POST" action="" class="form-horizontal">
                <div class="tab-content">
                  <div class="tab-pane" id="tab0">
                  </div>
                  <div class="tab-pane" id="tab1">
                    <div class="sized-container">
                      <h1>ข้อมูลส่วนตัว</h1>
                      <div class="row">
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">ชื่อ</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input"
                          id="namefield" name="namefield" class="required">
                        </div>
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">นามสกุล</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">ชื่อ (ภาษอังกฤษ)</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">นามสกุล (ภาษอังกฤษ)</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">ชื่อเล่น</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">ศาสนา</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">วันเกิด</h3>
                          <input type="date" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">เพศ</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-8">
                          <h3 style="margin: 0;">อีเมลล์</h3>
                          <input type="email" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">เบอร์โทรศัพท์</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">แพ้อะไร</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">โรคประจำตัว</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab2">
                    <div class="sized-container">
                      <h1>ข้อมูลส่วนตัว (ต่อ)</h1>
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 style="margin: 0;">ที่อยู่</h3>
                          <textarea class="form-control" style="font-size:1em;" row tops="3"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">Facebook</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input" class="required">
                        </div>
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">Twitter</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab3">
                    <div class="sized-container">
                      <h1>ข้อมูลการศึกษา</h1>
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 style="margin: 0;">ชื่อโรงเรียน</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <h3 style="margin: 0;">ระดับชั้น</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-5">
                          <h3 style="margin: 0;">แผนการเรียน</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-2">
                          <h3 style="margin: 0;">เกรดเฉลี่ย</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab4">
                    <div class="sized-container">
                      <h1>ข้อมูลด้านสุขภาพ</h1>
                      <div class="row">
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">แพ้อะไร</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-4">
                          <h3 style="margin: 0;">โรคประจำตัว</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab5">
                    <div class="sized-container">
                      <h1>ข้อมูลผู้ปกครอง</h1>
                      <div class="row">
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">ชื่อ</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-6">
                          <h3 style="margin: 0;">นามสกุล</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <h3 style="margin: 0;">ความสัมพันธ์</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                        <div class="col-xs-7">
                          <h3 style="margin: 0;">เบอร์โทรศัพท์</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab6">
                    <div class="sized-container">
                      <h1>ข้อมูลด้านอื่นๆ</h1>
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 style="margin: 0;">ทักษะทางคอมพิวเตอร์</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input" class="required">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 style="margin: 0;">รู้จักค่ายนี้จากไหน</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 style="margin: 0;">กิจกรรมที่เคยทำ</h3>
                          <input type="text" class="form-control" style="font-size:1em;" placeholder="Text input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <ul class="pager wizard">
                    <li class="previous first" style="display:none;"><a href="javascript:;">First</a></li>
                    <li class="previous"><a href="javascript:;">Previous</a></li>
                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                    <li class="next"><a href="javascript:;">Next</a></li>
                  </ul>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Content-->
      <div style="position:fixed; width:300px; right:0px; bottom:5px; text-align:right; z-index:50;">
      </div>
    </div>
    <!-- Javascript -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="assets/js/js.js"></script>
    <script src="assets/js/jquery.bootstrap.wizard.js"></script>
    <script>
  $(document).ready(function() {
      $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $percent = ($current/$total) * 100;
      $('#rootwizard').find('.bar').css({width:$percent+'%'});
    }});
  });
  </script>
  <script>
    $(document).ready(function() {
        var $validator = $("#regisForm").validate({
          rules: {
            namefield: {
              required: true,
              minlength: 3
            }
          }
        });

          $('#rootwizard').bootstrapWizard({
            'tabClass': 'nav nav-pills',
            'onNext': function(tab, navigation, index) {
              var $valid = $("#regisForm").valid();
              if(!$valid) {
                $validator.focusInvalid();
                return false;
              }
            }
          });
    });
    </script>
